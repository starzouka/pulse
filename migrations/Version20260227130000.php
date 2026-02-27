<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260227130000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add two-factor authentication fields on users';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE users ADD two_factor_enabled TINYINT(1) DEFAULT 0 NOT NULL, ADD two_factor_secret VARCHAR(64) DEFAULT NULL, ADD two_factor_enabled_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE users DROP two_factor_enabled, DROP two_factor_secret, DROP two_factor_enabled_at');
    }
}

