<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260224210803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_9E6C6B6B4584665A ON product_ratings');
        $this->addSql('ALTER TABLE product_ratings CHANGE rating_id rating_id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE product_id product_id INT UNSIGNED NOT NULL, CHANGE user_id user_id INT UNSIGNED NOT NULL, CHANGE rating rating INT UNSIGNED NOT NULL, CHANGE created_at created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE product_ratings ADD CONSTRAINT FK_1F6F1C794584665A FOREIGN KEY (product_id) REFERENCES products (product_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_ratings ADD CONSTRAINT FK_1F6F1C79A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_1F6F1C794584665A ON product_ratings (product_id)');
        $this->addSql('CREATE INDEX IDX_1F6F1C79A76ED395 ON product_ratings (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_ratings DROP FOREIGN KEY FK_1F6F1C794584665A');
        $this->addSql('ALTER TABLE product_ratings DROP FOREIGN KEY FK_1F6F1C79A76ED395');
        $this->addSql('DROP INDEX IDX_1F6F1C794584665A ON product_ratings');
        $this->addSql('DROP INDEX IDX_1F6F1C79A76ED395 ON product_ratings');
        $this->addSql('ALTER TABLE product_ratings CHANGE rating_id rating_id INT AUTO_INCREMENT NOT NULL, CHANGE rating rating INT NOT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime)\', CHANGE product_id product_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9E6C6B6B4584665A ON product_ratings (product_id, user_id)');
    }
}
