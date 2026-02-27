<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260227065000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Normalise les slugs jeux au format strict nom-id.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("UPDATE games SET slug = CONCAT(TRIM(BOTH '-' FROM LOWER(REPLACE(REPLACE(REPLACE(name, ' ', '-'), '--', '-'), '--', '-'))), '-', game_id)");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("UPDATE games SET slug = TRIM(BOTH '-' FROM LOWER(REPLACE(REPLACE(REPLACE(name, ' ', '-'), '--', '-'), '--', '-')))");
    }
}
