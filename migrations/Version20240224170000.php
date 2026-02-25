<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240224170000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create product_ratings table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE product_ratings (
            rating_id INT AUTO_INCREMENT NOT NULL,
            product_id INT NOT NULL,
            user_id INT NOT NULL,
            rating INT NOT NULL,
            created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime)\',
            UNIQUE INDEX UNIQ_9E6C6B6B4584665A (product_id, user_id),
            PRIMARY KEY(rating_id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('ALTER TABLE product_ratings 
            ADD CONSTRAINT FK_9E6C6B6B4584665A FOREIGN KEY (product_id) 
            REFERENCES products (product_id) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE product_ratings 
            ADD CONSTRAINT FK_9E6C6B6BA76ED395 FOREIGN KEY (user_id) 
            REFERENCES users (user_id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE product_ratings');
    }
}