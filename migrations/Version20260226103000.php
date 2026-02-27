<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260226103000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Allow admin user deletion by cascading user-owned orders/teams/tournaments/tournament requests';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEEA76ED395');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEA76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C2225896F755D8');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C2225896F755D8 FOREIGN KEY (captain_user_id) REFERENCES users (user_id) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE tournament_requests DROP FOREIGN KEY FK_9B3B30B4EE5F645C');
        $this->addSql('ALTER TABLE tournament_requests ADD CONSTRAINT FK_9B3B30B4EE5F645C FOREIGN KEY (organizer_user_id) REFERENCES users (user_id) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE tournaments DROP FOREIGN KEY FK_E4BCFAC3EE5F645C');
        $this->addSql('ALTER TABLE tournaments ADD CONSTRAINT FK_E4BCFAC3EE5F645C FOREIGN KEY (organizer_user_id) REFERENCES users (user_id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEEA76ED395');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEA76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE RESTRICT');

        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C2225896F755D8');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C2225896F755D8 FOREIGN KEY (captain_user_id) REFERENCES users (user_id) ON DELETE RESTRICT');

        $this->addSql('ALTER TABLE tournament_requests DROP FOREIGN KEY FK_9B3B30B4EE5F645C');
        $this->addSql('ALTER TABLE tournament_requests ADD CONSTRAINT FK_9B3B30B4EE5F645C FOREIGN KEY (organizer_user_id) REFERENCES users (user_id) ON DELETE RESTRICT');

        $this->addSql('ALTER TABLE tournaments DROP FOREIGN KEY FK_E4BCFAC3EE5F645C');
        $this->addSql('ALTER TABLE tournaments ADD CONSTRAINT FK_E4BCFAC3EE5F645C FOREIGN KEY (organizer_user_id) REFERENCES users (user_id) ON DELETE RESTRICT');
    }
}

