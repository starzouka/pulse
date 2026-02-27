<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260224210157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product_ratings (rating_id INT UNSIGNED AUTO_INCREMENT NOT NULL, rating INT UNSIGNED NOT NULL, created_at DATETIME NOT NULL, product_id INT UNSIGNED NOT NULL, user_id INT UNSIGNED NOT NULL, INDEX IDX_1F6F1C794584665A (product_id), INDEX IDX_1F6F1C79A76ED395 (user_id), PRIMARY KEY (rating_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE product_ratings ADD CONSTRAINT FK_1F6F1C794584665A FOREIGN KEY (product_id) REFERENCES products (product_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_ratings ADD CONSTRAINT FK_1F6F1C79A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_ratings DROP FOREIGN KEY FK_1F6F1C794584665A');
        $this->addSql('ALTER TABLE product_ratings DROP FOREIGN KEY FK_1F6F1C79A76ED395');
        $this->addSql('DROP TABLE product_ratings');
    }
}
