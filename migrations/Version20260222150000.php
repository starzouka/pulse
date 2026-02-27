<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260222150000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create product_ratings table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE product_ratings (
            rating_id INT UNSIGNED AUTO_INCREMENT NOT NULL,
            product_id INT UNSIGNED NOT NULL,
            user_id INT UNSIGNED NOT NULL,
            rating INT UNSIGNED NOT NULL,
            created_at DATETIME NOT NULL,
            INDEX IDX_PRODUCT_RATING_PRODUCT (product_id),
            INDEX IDX_PRODUCT_RATING_USER (user_id),
            UNIQUE INDEX UNIQ_PRODUCT_RATING_USER_PRODUCT (product_id, user_id),
            PRIMARY KEY(rating_id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('ALTER TABLE product_ratings 
            ADD CONSTRAINT FK_PRODUCT_RATING_PRODUCT 
            FOREIGN KEY (product_id) 
            REFERENCES products (product_id) 
            ON DELETE CASCADE');

        $this->addSql('ALTER TABLE product_ratings 
            ADD CONSTRAINT FK_PRODUCT_RATING_USER 
            FOREIGN KEY (user_id) 
            REFERENCES users (user_id) 
            ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE product_ratings');
    }
}
