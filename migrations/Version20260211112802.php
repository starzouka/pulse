<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260211112802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cart_items (quantity INT UNSIGNED DEFAULT 1 NOT NULL, unit_price_at_add NUMERIC(10, 2) NOT NULL, added_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, cart_id INT UNSIGNED NOT NULL, product_id INT UNSIGNED NOT NULL, INDEX IDX_BEF484451AD5CDBF (cart_id), INDEX IDX_BEF484454584665A (product_id), PRIMARY KEY (cart_id, product_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE carts (cart_id INT UNSIGNED AUTO_INCREMENT NOT NULL, status VARCHAR(7) DEFAULT \'OPEN\' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, locked_at DATETIME DEFAULT NULL, user_id INT UNSIGNED NOT NULL, UNIQUE INDEX UNIQ_4E004AACA76ED395 (user_id), PRIMARY KEY (cart_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE categories (category_id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(80) NOT NULL, description LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY (category_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE comments (comment_id INT UNSIGNED AUTO_INCREMENT NOT NULL, content_text LONGTEXT NOT NULL, is_deleted TINYINT DEFAULT 0 NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, post_id INT UNSIGNED NOT NULL, author_user_id INT UNSIGNED NOT NULL, parent_comment_id INT UNSIGNED DEFAULT NULL, INDEX IDX_5F9E962A4B89032C (post_id), INDEX IDX_5F9E962AE2544CD6 (author_user_id), INDEX IDX_5F9E962ABF2AF943 (parent_comment_id), PRIMARY KEY (comment_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE friend_requests (request_id INT UNSIGNED AUTO_INCREMENT NOT NULL, status VARCHAR(9) DEFAULT \'PENDING\' NOT NULL, request_message VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, responded_at DATETIME DEFAULT NULL, from_user_id INT UNSIGNED NOT NULL, to_user_id INT UNSIGNED NOT NULL, INDEX IDX_EC63B01B2130303A (from_user_id), INDEX IDX_EC63B01B29F6EE60 (to_user_id), PRIMARY KEY (request_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE friendships (created_at DATETIME NOT NULL, user_id1 INT UNSIGNED NOT NULL, user_id2 INT UNSIGNED NOT NULL, INDEX IDX_E0A8B7CA31EE6AF (user_id1), INDEX IDX_E0A8B7CA9A17B715 (user_id2), PRIMARY KEY (user_id1, user_id2)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE games (game_id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(120) NOT NULL, description LONGTEXT DEFAULT NULL, publisher VARCHAR(120) DEFAULT NULL, created_at DATETIME NOT NULL, category_id INT UNSIGNED NOT NULL, cover_image_id INT UNSIGNED DEFAULT NULL, INDEX IDX_FF232B3112469DE2 (category_id), INDEX IDX_FF232B31E5A0E336 (cover_image_id), PRIMARY KEY (game_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE images (image_id INT UNSIGNED AUTO_INCREMENT NOT NULL, file_url VARCHAR(500) NOT NULL, mime_type VARCHAR(60) NOT NULL, size_bytes BIGINT UNSIGNED NOT NULL, width INT UNSIGNED DEFAULT NULL, height INT UNSIGNED DEFAULT NULL, alt_text VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, uploaded_by_user_id INT UNSIGNED DEFAULT NULL, INDEX IDX_E01FBE6A861E61EA (uploaded_by_user_id), PRIMARY KEY (image_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE match_teams (score INT UNSIGNED DEFAULT NULL, is_winner TINYINT DEFAULT NULL, match_id INT UNSIGNED NOT NULL, team_id INT UNSIGNED NOT NULL, INDEX IDX_28A85DF92ABEACD6 (match_id), INDEX IDX_28A85DF9296CD8AE (team_id), PRIMARY KEY (match_id, team_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE matches (match_id INT UNSIGNED AUTO_INCREMENT NOT NULL, scheduled_at DATETIME DEFAULT NULL, round_name VARCHAR(80) DEFAULT NULL, best_of SMALLINT UNSIGNED DEFAULT NULL, status VARCHAR(9) DEFAULT \'SCHEDULED\' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, tournament_id INT UNSIGNED NOT NULL, result_submitted_by_user_id INT UNSIGNED DEFAULT NULL, INDEX IDX_62615BA33D1A3E7 (tournament_id), INDEX IDX_62615BAB956681A (result_submitted_by_user_id), PRIMARY KEY (match_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messages (message_id INT UNSIGNED AUTO_INCREMENT NOT NULL, body_text LONGTEXT NOT NULL, created_at DATETIME NOT NULL, is_read TINYINT DEFAULT 0 NOT NULL, read_at DATETIME DEFAULT NULL, is_deleted_by_sender TINYINT DEFAULT 0 NOT NULL, is_deleted_by_receiver TINYINT DEFAULT 0 NOT NULL, sender_user_id INT UNSIGNED NOT NULL, receiver_user_id INT UNSIGNED NOT NULL, INDEX IDX_DB021E962A98155E (sender_user_id), INDEX IDX_DB021E96DA57E237 (receiver_user_id), PRIMARY KEY (message_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE notifications (notification_id INT UNSIGNED AUTO_INCREMENT NOT NULL, type VARCHAR(25) NOT NULL, ref_table VARCHAR(64) DEFAULT NULL, ref_id BIGINT UNSIGNED DEFAULT NULL, content VARCHAR(255) NOT NULL, is_read TINYINT DEFAULT 0 NOT NULL, read_at DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, user_id INT UNSIGNED NOT NULL, INDEX IDX_6000B0D3A76ED395 (user_id), PRIMARY KEY (notification_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE orders (order_id INT UNSIGNED AUTO_INCREMENT NOT NULL, order_number VARCHAR(30) NOT NULL, status VARCHAR(9) DEFAULT \'PENDING\' NOT NULL, payment_method VARCHAR(5) DEFAULT NULL, payment_status VARCHAR(8) DEFAULT \'UNPAID\' NOT NULL, total_amount NUMERIC(10, 2) NOT NULL, shipping_address VARCHAR(255) DEFAULT NULL, phone_for_delivery VARCHAR(30) DEFAULT NULL, created_at DATETIME NOT NULL, paid_at DATETIME DEFAULT NULL, shipped_at DATETIME DEFAULT NULL, delivered_at DATETIME DEFAULT NULL, cart_id INT UNSIGNED NOT NULL, user_id INT UNSIGNED NOT NULL, UNIQUE INDEX UNIQ_E52FFDEE1AD5CDBF (cart_id), INDEX IDX_E52FFDEEA76ED395 (user_id), PRIMARY KEY (order_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE post_images (position INT UNSIGNED DEFAULT 1 NOT NULL, post_id INT UNSIGNED NOT NULL, image_id INT UNSIGNED NOT NULL, INDEX IDX_D03D5A0F4B89032C (post_id), INDEX IDX_D03D5A0F3DA5256D (image_id), PRIMARY KEY (post_id, image_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE post_likes (created_at DATETIME NOT NULL, post_id INT UNSIGNED NOT NULL, user_id INT UNSIGNED NOT NULL, INDEX IDX_DED1C2924B89032C (post_id), INDEX IDX_DED1C292A76ED395 (user_id), PRIMARY KEY (post_id, user_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE posts (post_id INT UNSIGNED AUTO_INCREMENT NOT NULL, content_text LONGTEXT DEFAULT NULL, visibility VARCHAR(9) DEFAULT \'PUBLIC\' NOT NULL, is_deleted TINYINT DEFAULT 0 NOT NULL, deleted_at DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, author_user_id INT UNSIGNED NOT NULL, INDEX IDX_885DBAFAE2544CD6 (author_user_id), PRIMARY KEY (post_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE product_images (position INT UNSIGNED DEFAULT 1 NOT NULL, product_id INT UNSIGNED NOT NULL, image_id INT UNSIGNED NOT NULL, INDEX IDX_8263FFCE4584665A (product_id), INDEX IDX_8263FFCE3DA5256D (image_id), PRIMARY KEY (product_id, image_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE products (product_id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, description LONGTEXT DEFAULT NULL, price NUMERIC(10, 2) NOT NULL, stock_qty INT UNSIGNED DEFAULT 0 NOT NULL, sku VARCHAR(64) DEFAULT NULL, is_active TINYINT DEFAULT 1 NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, team_id INT UNSIGNED NOT NULL, INDEX IDX_B3BA5A5A296CD8AE (team_id), PRIMARY KEY (product_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE reports (report_id INT UNSIGNED AUTO_INCREMENT NOT NULL, target_type VARCHAR(7) NOT NULL, target_id BIGINT UNSIGNED NOT NULL, reason LONGTEXT NOT NULL, status VARCHAR(9) DEFAULT \'OPEN\' NOT NULL, created_at DATETIME NOT NULL, handled_at DATETIME DEFAULT NULL, admin_note LONGTEXT DEFAULT NULL, reporter_user_id INT UNSIGNED NOT NULL, handled_by_admin_id INT UNSIGNED DEFAULT NULL, INDEX IDX_F11FA745DF3D6D95 (reporter_user_id), INDEX IDX_F11FA7454E1B747C (handled_by_admin_id), PRIMARY KEY (report_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE team_invites (invite_id INT UNSIGNED AUTO_INCREMENT NOT NULL, status VARCHAR(9) DEFAULT \'PENDING\' NOT NULL, message VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, responded_at DATETIME DEFAULT NULL, team_id INT UNSIGNED NOT NULL, invited_user_id INT UNSIGNED NOT NULL, invited_by_user_id INT UNSIGNED NOT NULL, INDEX IDX_FC071B5B296CD8AE (team_id), INDEX IDX_FC071B5BC58DAD6E (invited_user_id), INDEX IDX_FC071B5BEDB25FDD (invited_by_user_id), PRIMARY KEY (invite_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE team_join_requests (request_id INT UNSIGNED AUTO_INCREMENT NOT NULL, status VARCHAR(9) DEFAULT \'PENDING\' NOT NULL, note VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, responded_at DATETIME DEFAULT NULL, team_id INT UNSIGNED NOT NULL, user_id INT UNSIGNED NOT NULL, responded_by_captain_id INT UNSIGNED DEFAULT NULL, INDEX IDX_438737F3296CD8AE (team_id), INDEX IDX_438737F3A76ED395 (user_id), INDEX IDX_438737F3CC39CF7C (responded_by_captain_id), PRIMARY KEY (request_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE team_members (joined_at DATETIME NOT NULL, is_active TINYINT DEFAULT 1 NOT NULL, left_at DATETIME DEFAULT NULL, team_id INT UNSIGNED NOT NULL, user_id INT UNSIGNED NOT NULL, INDEX IDX_BAD9A3C8296CD8AE (team_id), INDEX IDX_BAD9A3C8A76ED395 (user_id), PRIMARY KEY (team_id, user_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE teams (team_id INT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, region VARCHAR(80) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, logo_image_id INT UNSIGNED DEFAULT NULL, captain_user_id INT UNSIGNED NOT NULL, INDEX IDX_96C222586D947EBB (logo_image_id), INDEX IDX_96C2225896F755D8 (captain_user_id), PRIMARY KEY (team_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE tournament_requests (request_id INT UNSIGNED AUTO_INCREMENT NOT NULL, title VARCHAR(180) NOT NULL, description LONGTEXT DEFAULT NULL, rules LONGTEXT DEFAULT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, registration_deadline DATE DEFAULT NULL, max_teams INT UNSIGNED NOT NULL, format VARCHAR(3) DEFAULT \'BO1\' NOT NULL, registration_mode VARCHAR(8) DEFAULT \'OPEN\' NOT NULL, prize_pool NUMERIC(12, 2) DEFAULT \'0.00\' NOT NULL, prize_description VARCHAR(255) DEFAULT NULL, status VARCHAR(8) DEFAULT \'PENDING\' NOT NULL, admin_response_note LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, reviewed_at DATETIME DEFAULT NULL, organizer_user_id INT UNSIGNED NOT NULL, game_id INT UNSIGNED NOT NULL, reviewed_by_admin_id INT UNSIGNED DEFAULT NULL, INDEX IDX_9B3B30B4EE5F645C (organizer_user_id), INDEX IDX_9B3B30B4E48FD905 (game_id), INDEX IDX_9B3B30B472001902 (reviewed_by_admin_id), PRIMARY KEY (request_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE tournament_teams (status VARCHAR(9) DEFAULT \'PENDING\' NOT NULL, seed INT UNSIGNED DEFAULT NULL, registered_at DATETIME NOT NULL, decided_at DATETIME DEFAULT NULL, checked_in TINYINT DEFAULT 0 NOT NULL, checkin_at DATETIME DEFAULT NULL, tournament_id INT UNSIGNED NOT NULL, team_id INT UNSIGNED NOT NULL, decided_by_user_id INT UNSIGNED DEFAULT NULL, INDEX IDX_5794B24133D1A3E7 (tournament_id), INDEX IDX_5794B241296CD8AE (team_id), INDEX IDX_5794B241515F5BC8 (decided_by_user_id), PRIMARY KEY (tournament_id, team_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE tournaments (tournament_id INT UNSIGNED AUTO_INCREMENT NOT NULL, title VARCHAR(180) NOT NULL, description LONGTEXT DEFAULT NULL, rules LONGTEXT DEFAULT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, registration_deadline DATE DEFAULT NULL, max_teams INT UNSIGNED NOT NULL, format VARCHAR(3) DEFAULT \'BO1\' NOT NULL, prize_pool NUMERIC(12, 2) DEFAULT \'0.00\' NOT NULL, prize_description VARCHAR(255) DEFAULT NULL, status VARCHAR(9) DEFAULT \'DRAFT\' NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, organizer_user_id INT UNSIGNED NOT NULL, game_id INT UNSIGNED NOT NULL, INDEX IDX_E4BCFAC3EE5F645C (organizer_user_id), INDEX IDX_E4BCFAC3E48FD905 (game_id), PRIMARY KEY (tournament_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE users (user_id INT UNSIGNED AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, email VARCHAR(190) NOT NULL, password_hash VARCHAR(255) NOT NULL, role VARCHAR(9) DEFAULT \'PLAYER\' NOT NULL, display_name VARCHAR(80) NOT NULL, bio LONGTEXT DEFAULT NULL, phone VARCHAR(30) DEFAULT NULL, country VARCHAR(80) DEFAULT NULL, birth_date DATE DEFAULT NULL, gender VARCHAR(7) DEFAULT \'UNKNOWN\', email_verified TINYINT DEFAULT 0 NOT NULL, is_active TINYINT DEFAULT 1 NOT NULL, last_login_at DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, profile_image_id INT UNSIGNED DEFAULT NULL, INDEX IDX_1483A5E9C4CF44DC (profile_image_id), PRIMARY KEY (user_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE cart_items ADD CONSTRAINT FK_BEF484451AD5CDBF FOREIGN KEY (cart_id) REFERENCES carts (cart_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cart_items ADD CONSTRAINT FK_BEF484454584665A FOREIGN KEY (product_id) REFERENCES products (product_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE carts ADD CONSTRAINT FK_4E004AACA76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A4B89032C FOREIGN KEY (post_id) REFERENCES posts (post_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AE2544CD6 FOREIGN KEY (author_user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962ABF2AF943 FOREIGN KEY (parent_comment_id) REFERENCES comments (comment_id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE friend_requests ADD CONSTRAINT FK_EC63B01B2130303A FOREIGN KEY (from_user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE friend_requests ADD CONSTRAINT FK_EC63B01B29F6EE60 FOREIGN KEY (to_user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE friendships ADD CONSTRAINT FK_E0A8B7CA31EE6AF FOREIGN KEY (user_id1) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE friendships ADD CONSTRAINT FK_E0A8B7CA9A17B715 FOREIGN KEY (user_id2) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B3112469DE2 FOREIGN KEY (category_id) REFERENCES categories (category_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE games ADD CONSTRAINT FK_FF232B31E5A0E336 FOREIGN KEY (cover_image_id) REFERENCES images (image_id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A861E61EA FOREIGN KEY (uploaded_by_user_id) REFERENCES users (user_id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE match_teams ADD CONSTRAINT FK_28A85DF92ABEACD6 FOREIGN KEY (match_id) REFERENCES matches (match_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE match_teams ADD CONSTRAINT FK_28A85DF9296CD8AE FOREIGN KEY (team_id) REFERENCES teams (team_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matches ADD CONSTRAINT FK_62615BA33D1A3E7 FOREIGN KEY (tournament_id) REFERENCES tournaments (tournament_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matches ADD CONSTRAINT FK_62615BAB956681A FOREIGN KEY (result_submitted_by_user_id) REFERENCES users (user_id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E962A98155E FOREIGN KEY (sender_user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E96DA57E237 FOREIGN KEY (receiver_user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D3A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE1AD5CDBF FOREIGN KEY (cart_id) REFERENCES carts (cart_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEA76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE post_images ADD CONSTRAINT FK_D03D5A0F4B89032C FOREIGN KEY (post_id) REFERENCES posts (post_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_images ADD CONSTRAINT FK_D03D5A0F3DA5256D FOREIGN KEY (image_id) REFERENCES images (image_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE post_likes ADD CONSTRAINT FK_DED1C2924B89032C FOREIGN KEY (post_id) REFERENCES posts (post_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_likes ADD CONSTRAINT FK_DED1C292A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE posts ADD CONSTRAINT FK_885DBAFAE2544CD6 FOREIGN KEY (author_user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_images ADD CONSTRAINT FK_8263FFCE4584665A FOREIGN KEY (product_id) REFERENCES products (product_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_images ADD CONSTRAINT FK_8263FFCE3DA5256D FOREIGN KEY (image_id) REFERENCES images (image_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A296CD8AE FOREIGN KEY (team_id) REFERENCES teams (team_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reports ADD CONSTRAINT FK_F11FA745DF3D6D95 FOREIGN KEY (reporter_user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reports ADD CONSTRAINT FK_F11FA7454E1B747C FOREIGN KEY (handled_by_admin_id) REFERENCES users (user_id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE team_invites ADD CONSTRAINT FK_FC071B5B296CD8AE FOREIGN KEY (team_id) REFERENCES teams (team_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_invites ADD CONSTRAINT FK_FC071B5BC58DAD6E FOREIGN KEY (invited_user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_invites ADD CONSTRAINT FK_FC071B5BEDB25FDD FOREIGN KEY (invited_by_user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_join_requests ADD CONSTRAINT FK_438737F3296CD8AE FOREIGN KEY (team_id) REFERENCES teams (team_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_join_requests ADD CONSTRAINT FK_438737F3A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_join_requests ADD CONSTRAINT FK_438737F3CC39CF7C FOREIGN KEY (responded_by_captain_id) REFERENCES users (user_id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE team_members ADD CONSTRAINT FK_BAD9A3C8296CD8AE FOREIGN KEY (team_id) REFERENCES teams (team_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_members ADD CONSTRAINT FK_BAD9A3C8A76ED395 FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C222586D947EBB FOREIGN KEY (logo_image_id) REFERENCES images (image_id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C2225896F755D8 FOREIGN KEY (captain_user_id) REFERENCES users (user_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE tournament_requests ADD CONSTRAINT FK_9B3B30B4EE5F645C FOREIGN KEY (organizer_user_id) REFERENCES users (user_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE tournament_requests ADD CONSTRAINT FK_9B3B30B4E48FD905 FOREIGN KEY (game_id) REFERENCES games (game_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE tournament_requests ADD CONSTRAINT FK_9B3B30B472001902 FOREIGN KEY (reviewed_by_admin_id) REFERENCES users (user_id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE tournament_teams ADD CONSTRAINT FK_5794B24133D1A3E7 FOREIGN KEY (tournament_id) REFERENCES tournaments (tournament_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournament_teams ADD CONSTRAINT FK_5794B241296CD8AE FOREIGN KEY (team_id) REFERENCES teams (team_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournament_teams ADD CONSTRAINT FK_5794B241515F5BC8 FOREIGN KEY (decided_by_user_id) REFERENCES users (user_id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE tournaments ADD CONSTRAINT FK_E4BCFAC3EE5F645C FOREIGN KEY (organizer_user_id) REFERENCES users (user_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE tournaments ADD CONSTRAINT FK_E4BCFAC3E48FD905 FOREIGN KEY (game_id) REFERENCES games (game_id) ON DELETE RESTRICT');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9C4CF44DC FOREIGN KEY (profile_image_id) REFERENCES images (image_id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart_items DROP FOREIGN KEY FK_BEF484451AD5CDBF');
        $this->addSql('ALTER TABLE cart_items DROP FOREIGN KEY FK_BEF484454584665A');
        $this->addSql('ALTER TABLE carts DROP FOREIGN KEY FK_4E004AACA76ED395');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A4B89032C');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AE2544CD6');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962ABF2AF943');
        $this->addSql('ALTER TABLE friend_requests DROP FOREIGN KEY FK_EC63B01B2130303A');
        $this->addSql('ALTER TABLE friend_requests DROP FOREIGN KEY FK_EC63B01B29F6EE60');
        $this->addSql('ALTER TABLE friendships DROP FOREIGN KEY FK_E0A8B7CA31EE6AF');
        $this->addSql('ALTER TABLE friendships DROP FOREIGN KEY FK_E0A8B7CA9A17B715');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B3112469DE2');
        $this->addSql('ALTER TABLE games DROP FOREIGN KEY FK_FF232B31E5A0E336');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A861E61EA');
        $this->addSql('ALTER TABLE match_teams DROP FOREIGN KEY FK_28A85DF92ABEACD6');
        $this->addSql('ALTER TABLE match_teams DROP FOREIGN KEY FK_28A85DF9296CD8AE');
        $this->addSql('ALTER TABLE matches DROP FOREIGN KEY FK_62615BA33D1A3E7');
        $this->addSql('ALTER TABLE matches DROP FOREIGN KEY FK_62615BAB956681A');
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E962A98155E');
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E96DA57E237');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY FK_6000B0D3A76ED395');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE1AD5CDBF');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEEA76ED395');
        $this->addSql('ALTER TABLE post_images DROP FOREIGN KEY FK_D03D5A0F4B89032C');
        $this->addSql('ALTER TABLE post_images DROP FOREIGN KEY FK_D03D5A0F3DA5256D');
        $this->addSql('ALTER TABLE post_likes DROP FOREIGN KEY FK_DED1C2924B89032C');
        $this->addSql('ALTER TABLE post_likes DROP FOREIGN KEY FK_DED1C292A76ED395');
        $this->addSql('ALTER TABLE posts DROP FOREIGN KEY FK_885DBAFAE2544CD6');
        $this->addSql('ALTER TABLE product_images DROP FOREIGN KEY FK_8263FFCE4584665A');
        $this->addSql('ALTER TABLE product_images DROP FOREIGN KEY FK_8263FFCE3DA5256D');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A296CD8AE');
        $this->addSql('ALTER TABLE reports DROP FOREIGN KEY FK_F11FA745DF3D6D95');
        $this->addSql('ALTER TABLE reports DROP FOREIGN KEY FK_F11FA7454E1B747C');
        $this->addSql('ALTER TABLE team_invites DROP FOREIGN KEY FK_FC071B5B296CD8AE');
        $this->addSql('ALTER TABLE team_invites DROP FOREIGN KEY FK_FC071B5BC58DAD6E');
        $this->addSql('ALTER TABLE team_invites DROP FOREIGN KEY FK_FC071B5BEDB25FDD');
        $this->addSql('ALTER TABLE team_join_requests DROP FOREIGN KEY FK_438737F3296CD8AE');
        $this->addSql('ALTER TABLE team_join_requests DROP FOREIGN KEY FK_438737F3A76ED395');
        $this->addSql('ALTER TABLE team_join_requests DROP FOREIGN KEY FK_438737F3CC39CF7C');
        $this->addSql('ALTER TABLE team_members DROP FOREIGN KEY FK_BAD9A3C8296CD8AE');
        $this->addSql('ALTER TABLE team_members DROP FOREIGN KEY FK_BAD9A3C8A76ED395');
        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C222586D947EBB');
        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C2225896F755D8');
        $this->addSql('ALTER TABLE tournament_requests DROP FOREIGN KEY FK_9B3B30B4EE5F645C');
        $this->addSql('ALTER TABLE tournament_requests DROP FOREIGN KEY FK_9B3B30B4E48FD905');
        $this->addSql('ALTER TABLE tournament_requests DROP FOREIGN KEY FK_9B3B30B472001902');
        $this->addSql('ALTER TABLE tournament_teams DROP FOREIGN KEY FK_5794B24133D1A3E7');
        $this->addSql('ALTER TABLE tournament_teams DROP FOREIGN KEY FK_5794B241296CD8AE');
        $this->addSql('ALTER TABLE tournament_teams DROP FOREIGN KEY FK_5794B241515F5BC8');
        $this->addSql('ALTER TABLE tournaments DROP FOREIGN KEY FK_E4BCFAC3EE5F645C');
        $this->addSql('ALTER TABLE tournaments DROP FOREIGN KEY FK_E4BCFAC3E48FD905');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9C4CF44DC');
        $this->addSql('DROP TABLE cart_items');
        $this->addSql('DROP TABLE carts');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE friend_requests');
        $this->addSql('DROP TABLE friendships');
        $this->addSql('DROP TABLE games');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE match_teams');
        $this->addSql('DROP TABLE matches');
        $this->addSql('DROP TABLE messages');
        $this->addSql('DROP TABLE notifications');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE post_images');
        $this->addSql('DROP TABLE post_likes');
        $this->addSql('DROP TABLE posts');
        $this->addSql('DROP TABLE product_images');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE reports');
        $this->addSql('DROP TABLE team_invites');
        $this->addSql('DROP TABLE team_join_requests');
        $this->addSql('DROP TABLE team_members');
        $this->addSql('DROP TABLE teams');
        $this->addSql('DROP TABLE tournament_requests');
        $this->addSql('DROP TABLE tournament_teams');
        $this->addSql('DROP TABLE tournaments');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
