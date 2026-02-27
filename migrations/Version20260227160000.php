<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260227160000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Games/category SEO slugs, game status/popularity counters, game favorites table, and slug backfill';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE categories ADD slug VARCHAR(191) DEFAULT NULL');

        $this->addSql("ALTER TABLE games ADD slug VARCHAR(191) DEFAULT NULL, ADD status VARCHAR(10) DEFAULT 'DRAFT' NOT NULL, ADD popularity_score INT UNSIGNED DEFAULT 0 NOT NULL, ADD views_count INT UNSIGNED DEFAULT 0 NOT NULL, ADD favorites_count INT UNSIGNED DEFAULT 0 NOT NULL, ADD cover_name VARCHAR(255) DEFAULT NULL, ADD reviewed_at DATETIME DEFAULT NULL");

        $this->addSql('CREATE TABLE game_favorites (created_at DATETIME NOT NULL, user_id INT UNSIGNED NOT NULL, game_id INT UNSIGNED NOT NULL, INDEX IDX_E4F1BA04A76ED395 (user_id), INDEX IDX_E4F1BA04E48FD905 (game_id), PRIMARY KEY(user_id, game_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE game_favorites ADD CONSTRAINT FK_E4F1BA04A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game_favorites ADD CONSTRAINT FK_E4F1BA04E48FD905 FOREIGN KEY (game_id) REFERENCES games (game_id) ON DELETE CASCADE');

        $this->addSql("UPDATE games g INNER JOIN images i ON i.image_id = g.cover_image_id SET g.cover_name = SUBSTRING_INDEX(i.file_url, '/', -1) WHERE g.cover_image_id IS NOT NULL AND (g.cover_name IS NULL OR g.cover_name = '')");

        /** @var list<array{category_id:int,name:string|null}> $categoryRows */
        $categoryRows = $this->connection->fetchAllAssociative('SELECT category_id, name FROM categories ORDER BY category_id ASC');
        $usedCategorySlugs = [];
        foreach ($categoryRows as $row) {
            $categoryId = (int) ($row['category_id'] ?? 0);
            if ($categoryId <= 0) {
                continue;
            }

            $baseSlug = $this->slugify((string) ($row['name'] ?? 'category'));
            $finalSlug = $baseSlug;
            $suffix = 2;
            while (in_array($finalSlug, $usedCategorySlugs, true)) {
                $finalSlug = $baseSlug . '-' . $suffix;
                ++$suffix;
            }

            $usedCategorySlugs[] = $finalSlug;
            $this->addSql('UPDATE categories SET slug = :slug WHERE category_id = :id', [
                'slug' => $finalSlug,
                'id' => $categoryId,
            ]);
        }

        /** @var list<array{game_id:int,name:string|null}> $gameRows */
        $gameRows = $this->connection->fetchAllAssociative('SELECT game_id, name FROM games ORDER BY game_id ASC');
        foreach ($gameRows as $row) {
            $gameId = (int) ($row['game_id'] ?? 0);
            if ($gameId <= 0) {
                continue;
            }

            $nameSlug = $this->slugify((string) ($row['name'] ?? 'game'));
            $gameSlug = sprintf('%s-%d', $nameSlug, $gameId);

            $this->addSql('UPDATE games SET slug = :slug WHERE game_id = :id', [
                'slug' => $gameSlug,
                'id' => $gameId,
            ]);
        }

        $this->addSql('ALTER TABLE categories MODIFY slug VARCHAR(191) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3AF346687989D9B62F6E5E0A ON categories (slug)');

        $this->addSql('ALTER TABLE games MODIFY slug VARCHAR(191) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FF232B31989D9B62F6E5E0A ON games (slug)');
        $this->addSql('CREATE INDEX IDX_FF232B31FB5A3183 ON games (status)');
        $this->addSql('CREATE INDEX IDX_FF232B31DFADE446 ON games (popularity_score)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE game_favorites DROP FOREIGN KEY FK_E4F1BA04A76ED395');
        $this->addSql('ALTER TABLE game_favorites DROP FOREIGN KEY FK_E4F1BA04E48FD905');
        $this->addSql('DROP TABLE game_favorites');

        $this->addSql('DROP INDEX UNIQ_3AF346687989D9B62F6E5E0A ON categories');
        $this->addSql('ALTER TABLE categories DROP slug');

        $this->addSql('DROP INDEX UNIQ_FF232B31989D9B62F6E5E0A ON games');
        $this->addSql('DROP INDEX IDX_FF232B31FB5A3183 ON games');
        $this->addSql('DROP INDEX IDX_FF232B31DFADE446 ON games');
        $this->addSql('ALTER TABLE games DROP slug, DROP status, DROP popularity_score, DROP views_count, DROP favorites_count, DROP cover_name, DROP reviewed_at');
    }

    private function slugify(string $value): string
    {
        $trimmed = trim($value);
        if ($trimmed === '') {
            return 'item';
        }

        $ascii = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $trimmed);
        if (!is_string($ascii) || $ascii === '') {
            $ascii = $trimmed;
        }

        $ascii = strtolower($ascii);
        $ascii = preg_replace('/[^a-z0-9]+/', '-', $ascii) ?? $ascii;
        $ascii = trim($ascii, '-');
        if ($ascii === '') {
            return 'item';
        }

        return $ascii;
    }
}
