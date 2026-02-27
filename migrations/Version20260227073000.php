<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260227073000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajoute game_favorites et metriques vues/favoris pour score intelligent des jeux.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE games ADD views_count INT DEFAULT 0 NOT NULL, ADD favorites_count INT DEFAULT 0 NOT NULL');
        $this->addSql('CREATE TABLE game_favorites (favorite_id INT UNSIGNED AUTO_INCREMENT NOT NULL, user_id INT UNSIGNED NOT NULL, game_id INT UNSIGNED NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_82C2008BA76ED395 (user_id), INDEX IDX_82C2008BE48FD905 (game_id), UNIQUE INDEX uniq_game_favorite_user_game (user_id, game_id), PRIMARY KEY(favorite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game_favorites ADD CONSTRAINT FK_82C2008BA76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game_favorites ADD CONSTRAINT FK_82C2008BE48FD905 FOREIGN KEY (game_id) REFERENCES games (game_id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE game_favorites DROP FOREIGN KEY FK_82C2008BA76ED395');
        $this->addSql('ALTER TABLE game_favorites DROP FOREIGN KEY FK_82C2008BE48FD905');
        $this->addSql('DROP TABLE game_favorites');
        $this->addSql('ALTER TABLE games DROP views_count, DROP favorites_count');
    }
}
