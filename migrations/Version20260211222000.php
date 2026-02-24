<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260211222000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add tournament photo upload columns and registration_mode on tournaments';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE tournaments ADD registration_mode VARCHAR(8) DEFAULT 'OPEN' NOT NULL, ADD photo_path VARCHAR(255) DEFAULT NULL");
        $this->addSql('ALTER TABLE tournament_requests ADD photo_path VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE tournaments DROP registration_mode, DROP photo_path');
        $this->addSql('ALTER TABLE tournament_requests DROP photo_path');
    }
}
