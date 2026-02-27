<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240224170001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create product_ratings table';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('product_ratings');
        $table->addColumn('rating_id', 'integer', ['autoincrement' => true, 'unsigned' => true]);
        $table->addColumn('product_id', 'integer', ['unsigned' => true]);
        $table->addColumn('user_id', 'integer', ['unsigned' => true]);
        $table->addColumn('rating', 'integer', ['unsigned' => true]);
        $table->addColumn('created_at', 'datetime');
        $table->setPrimaryKey(['rating_id']);
        $table->addUniqueIndex(['product_id', 'user_id'], 'UNIQ_9E6C6B6B4584665A');
        $table->addForeignKeyConstraint('products', ['product_id'], ['product_id'], ['onDelete' => 'CASCADE'], 'FK_9E6C6B6B4584665A');
        $table->addForeignKeyConstraint('users', ['user_id'], ['user_id'], ['onDelete' => 'CASCADE'], 'FK_9E6C6B6BA76ED395');
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('product_ratings');
    }
}