<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260227011000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajoute les champs metier avances Game (status, popularite, cover Vich, updated_at).';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE games ADD updated_at DATETIME DEFAULT NULL, ADD status VARCHAR(20) DEFAULT 'DRAFT' NOT NULL, ADD popularity_score INT DEFAULT 0 NOT NULL, ADD cover_name VARCHAR(255) DEFAULT NULL");
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE games DROP updated_at, DROP status, DROP popularity_score, DROP cover_name');
    }
}
