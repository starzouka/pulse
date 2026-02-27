<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260227064000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Force le format slug jeux en nom-id pour toutes les lignes existantes.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("UPDATE games SET slug = CONCAT(TRIM(BOTH '-' FROM LOWER(REPLACE(REPLACE(REPLACE(COALESCE(NULLIF(slug, ''), name), ' ', '-'), '--', '-'), '--', '-'))), '-', game_id)");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("UPDATE games SET slug = TRIM(BOTH '-' FROM REGEXP_REPLACE(slug, '-[0-9]+$', ''))");
    }
}
