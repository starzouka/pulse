<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260226220425 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories DROP deleted_at');
        $this->addSql('ALTER TABLE games DROP official_url, DROP is_active, DROP deleted_at');
        $this->addSql('ALTER TABLE tournament_requests ADD photo_path VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE tournaments ADD registration_mode VARCHAR(8) DEFAULT \'OPEN\' NOT NULL, ADD photo_path VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD reset_password_token_hash VARCHAR(64) DEFAULT NULL, ADD reset_password_expires_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories ADD deleted_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE games ADD official_url VARCHAR(500) DEFAULT NULL, ADD is_active TINYINT DEFAULT 1 NOT NULL, ADD deleted_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE tournaments DROP registration_mode, DROP photo_path');
        $this->addSql('ALTER TABLE tournament_requests DROP photo_path');
        $this->addSql('ALTER TABLE users DROP reset_password_token_hash, DROP reset_password_expires_at');
    }
}
