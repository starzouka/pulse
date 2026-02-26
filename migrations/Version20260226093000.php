<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260226093000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add roster_role to team_members for advanced roster management';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE team_members ADD roster_role VARCHAR(20) DEFAULT 'STARTER' NOT NULL");
        $this->addSql("UPDATE team_members tm INNER JOIN teams t ON t.team_id = tm.team_id SET tm.roster_role = 'CAPTAIN' WHERE t.captain_user_id = tm.user_id");
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE team_members DROP roster_role');
    }
}

