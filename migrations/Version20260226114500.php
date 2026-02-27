<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260226114500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Allow cascading user deletion through carts by changing orders.cart_id FK to CASCADE';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE1AD5CDBF');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE1AD5CDBF FOREIGN KEY (cart_id) REFERENCES carts (cart_id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE1AD5CDBF');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE1AD5CDBF FOREIGN KEY (cart_id) REFERENCES carts (cart_id) ON DELETE RESTRICT');
    }
}

