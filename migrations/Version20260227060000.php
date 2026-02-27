<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260227060000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajoute des slugs SEO sur games/categories via doctrine-extensions (sluggable).';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE categories ADD slug VARCHAR(120) DEFAULT NULL');
        $this->addSql('ALTER TABLE games ADD slug VARCHAR(160) DEFAULT NULL');

        $this->addSql("UPDATE categories SET slug = CONCAT(LOWER(REPLACE(REPLACE(REPLACE(TRIM(name), ' ', '-'), '--', '-'), '--', '-')), '-', category_id) WHERE slug IS NULL OR slug = ''");
        $this->addSql("UPDATE games SET slug = CONCAT(LOWER(REPLACE(REPLACE(REPLACE(TRIM(name), ' ', '-'), '--', '-'), '--', '-')), '-', game_id) WHERE slug IS NULL OR slug = ''");

        $this->addSql('ALTER TABLE categories CHANGE slug slug VARCHAR(120) NOT NULL');
        $this->addSql('ALTER TABLE games CHANGE slug slug VARCHAR(160) NOT NULL');

        $this->addSql('CREATE UNIQUE INDEX UNIQ_3AF34668989D9B62 ON categories (slug)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E48FD905989D9B62 ON games (slug)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP INDEX UNIQ_3AF34668989D9B62 ON categories');
        $this->addSql('DROP INDEX UNIQ_E48FD905989D9B62 ON games');
        $this->addSql('ALTER TABLE categories DROP slug');
        $this->addSql('ALTER TABLE games DROP slug');
    }
}
