<?php

declare(strict_types=1);

namespace App\Command;

use Doctrine\DBAL\Connection;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:seed-demo-data',
    description: 'Seed demo data (20+ rows per business table).',
)]
final class SeedDemoDataCommand extends Command
{
    private const MIN = 20;
    private const PASSWORD = 'Pulse@1234';

    /** @var list<string> */
    private const TABLES = [
        'match_teams',
        'matches',
        'tournament_teams',
        'tournament_requests',
        'tournaments',
        'team_members',
        'team_join_requests',
        'team_invites',
        'friendships',
        'friend_requests',
        'post_likes',
        'post_images',
        'comments',
        'posts',
        'product_images',
        'cart_items',
        'orders',
        'carts',
        'products',
        'games',
        'teams',
        'reports',
        'notifications',
        'messages',
        'images',
        'categories',
        'users',
        'messenger_messages',
    ];

    private \DateTimeImmutable $now;

    public function __construct(private readonly Connection $db)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $this->now = new \DateTimeImmutable('now');

        $hash = password_hash(self::PASSWORD, PASSWORD_BCRYPT);
        if ($hash === false) {
            $io->error('Hash password failed.');

            return Command::FAILURE;
        }

        $io->warning('Les tables métier seront vidées puis remplies avec des données de démo.');

        $this->truncateTables();
        $this->seedUsers($hash);
        $this->seedCatalogAndMedia();
        $this->seedTeamsShopCommerce();
        $this->seedSocial();
        $this->seedTournamentDomain();
        $this->seedMessagingNotificationsReportsQueue();

        $this->writeCredentialsCsv();
        $counts = $this->counts();

        $bad = [];
        foreach ($counts as $table => $count) {
            if ($table !== 'doctrine_migration_versions' && $count < self::MIN) {
                $bad[$table] = $count;
            }
        }

        if ($bad !== []) {
            $io->error('Certaines tables ont moins de 20 lignes.');
            $rows = [];
            foreach ($bad as $t => $c) {
                $rows[] = [$t, (string) $c];
            }
            $io->table(['Table', 'Rows'], $rows);

            return Command::FAILURE;
        }

        $rows = [];
        foreach ($counts as $t => $c) {
            $rows[] = [$t, (string) $c];
        }
        $io->success('Seed terminé.');
        $io->table(['Table', 'Rows'], $rows);
        $io->text('Mot de passe commun: ' . self::PASSWORD);
        $io->text('Comptes: var/demo-user-credentials.csv');
        $io->text('Note: doctrine_migration_versions n’est pas touchée volontairement.');

        return Command::SUCCESS;
    }

    private function seedUsers(string $hash): void
    {
        $roles = array_merge(
            array_fill(0, 8, 'PLAYER'),
            array_fill(0, 5, 'CAPTAIN'),
            array_fill(0, 4, 'ORGANIZER'),
            array_fill(0, 3, 'ADMIN'),
        );
        $roleIdx = ['PLAYER' => 0, 'CAPTAIN' => 0, 'ORGANIZER' => 0, 'ADMIN' => 0];
        $genders = ['MALE', 'FEMALE', 'OTHER', 'UNKNOWN'];

        foreach ($roles as $k => $role) {
            $i = $k + 1;
            $roleIdx[$role]++;
            $n = $roleIdx[$role];
            $p = strtolower($role);

            $this->insert('users', [
                'username' => sprintf('%s%02d', $p, $n),
                'email' => sprintf('%s%02d@pulse.local', $p, $n),
                'password_hash' => $hash,
                'role' => $role,
                'display_name' => sprintf('%s %02d', ucfirst($p), $n),
                'bio' => sprintf('Compte demo %s %02d.', $p, $n),
                'phone' => sprintf('+216 20 %02d %02d %02d', $i, $i, $i),
                'country' => 'Tunisia',
                'birth_date' => $this->d(7000 + ($i * 35)),
                'gender' => $genders[($i - 1) % count($genders)],
                'email_verified' => 1,
                'is_active' => 1,
                'last_login_at' => $this->dt($i * 11),
                'created_at' => $this->dt(10000 + ($i * 17)),
                'updated_at' => $this->dt($i * 5),
                'reset_password_token_hash' => null,
                'reset_password_expires_at' => null,
                'profile_image_id' => null,
            ]);
        }
    }

    private function seedCatalogAndMedia(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            $this->insert('categories', [
                'name' => sprintf('Categorie %02d', $i),
                'description' => sprintf('Description demo de la categorie %02d.', $i),
                'created_at' => $this->dt(5000 + ($i * 9)),
            ]);
        }

        for ($i = 1; $i <= 80; $i++) {
            $this->insert('images', [
                'file_url' => sprintf('/uploads/demo/image-%03d.jpg', $i),
                'mime_type' => 'image/jpeg',
                'size_bytes' => 50000 + ($i * 777),
                'width' => 800 + (($i % 5) * 40),
                'height' => 600 + (($i % 4) * 30),
                'alt_text' => sprintf('Image demo %03d', $i),
                'created_at' => $this->dt(4000 + ($i * 3)),
                'uploaded_by_user_id' => (($i - 1) % 20) + 1,
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $this->db->update('users', [
                'profile_image_id' => $i,
                'updated_at' => $this->dt(3 + $i),
            ], [
                'user_id' => $i,
            ]);
        }
    }

    private function seedTeamsShopCommerce(): void
    {
        $captains = range(9, 13);
        $players = range(1, 8);

        for ($i = 1; $i <= 20; $i++) {
            $captainId = $this->cyc($captains, $i);
            $this->insert('teams', [
                'name' => sprintf('Team Pulse %02d', $i),
                'description' => sprintf('Equipe demo %02d.', $i),
                'region' => $this->cyc(['Tunis', 'Sfax', 'Sousse', 'Ariana', 'Nabeul'], $i),
                'created_at' => $this->dt(3500 + ($i * 8)),
                'updated_at' => $this->dt($i * 4),
                'logo_image_id' => 20 + $i, // 21..40
                'captain_user_id' => $captainId,
            ]);

            $this->insert('team_members', [
                'joined_at' => $this->dt(3000 + ($i * 7)),
                'is_active' => 1,
                'left_at' => null,
                'team_id' => $i,
                'user_id' => $captainId,
            ]);

            $this->insert('team_members', [
                'joined_at' => $this->dt(2900 + ($i * 7)),
                'is_active' => $i % 7 === 0 ? 0 : 1,
                'left_at' => $i % 7 === 0 ? $this->dt(100 + $i) : null,
                'team_id' => $i,
                'user_id' => $this->cyc($players, $i),
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $this->insert('games', [
                'name' => sprintf('Game Demo %02d', $i),
                'description' => sprintf('Jeu demo %02d pour les tests.', $i),
                'publisher' => sprintf('Studio %02d', (($i - 1) % 10) + 1),
                'created_at' => $this->dt(2500 + ($i * 5)),
                'category_id' => $i,
                'cover_image_id' => 40 + $i, // 41..60
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $price = number_format(15 + ($i * 2.5), 2, '.', '');
            $this->insert('products', [
                'name' => sprintf('Produit Team %02d', $i),
                'description' => sprintf('Produit demo lié à Team %02d.', $i),
                'price' => $price,
                'stock_qty' => 10 + ($i * 3),
                'sku' => sprintf('PULSE-SKU-%03d', $i),
                'is_active' => $i % 9 === 0 ? 0 : 1,
                'created_at' => $this->dt(2200 + ($i * 4)),
                'updated_at' => $this->dt($i * 2),
                'team_id' => $i,
            ]);

            $this->insert('product_images', [
                'position' => 1,
                'product_id' => $i,
                'image_id' => 60 + $i, // 61..80
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $status = $this->cyc(['OPEN', 'LOCKED', 'ORDERED'], $i);
            $this->insert('carts', [
                'status' => $status,
                'created_at' => $this->dt(1800 + ($i * 3)),
                'updated_at' => $this->dt(40 + $i),
                'locked_at' => in_array($status, ['LOCKED', 'ORDERED'], true) ? $this->dt(120 + $i) : null,
                'user_id' => $i,
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $qty = ($i % 3) + 1;
            $unit = 15 + ($i * 2.5);

            $this->insert('cart_items', [
                'quantity' => $qty,
                'unit_price_at_add' => number_format($unit, 2, '.', ''),
                'added_at' => $this->dt(1600 + ($i * 2)),
                'updated_at' => $this->dt(35 + $i),
                'cart_id' => $i,
                'product_id' => $i,
            ]);

            $status = $this->cyc(['PENDING', 'PAID', 'SHIPPED', 'DELIVERED', 'CANCELLED'], $i);
            $paid = in_array($status, ['PAID', 'SHIPPED', 'DELIVERED'], true);
            $total = number_format($unit * $qty, 2, '.', '');

            $this->insert('orders', [
                'order_number' => sprintf('ORD-%s-%04d', $this->now->format('Ymd'), $i),
                'status' => $status,
                'payment_method' => $this->cyc(['CARD', 'CASH', 'OTHER'], $i),
                'payment_status' => $paid ? 'PAID' : ($status === 'CANCELLED' ? 'REFUNDED' : 'UNPAID'),
                'total_amount' => $total,
                'shipping_address' => sprintf('%d Rue Demo, Tunis', 100 + $i),
                'phone_for_delivery' => sprintf('+216 55 %02d %02d %02d', $i, $i, $i),
                'created_at' => $this->dt(1400 + ($i * 2)),
                'paid_at' => $paid ? $this->dt(900 + $i) : null,
                'shipped_at' => in_array($status, ['SHIPPED', 'DELIVERED'], true) ? $this->dt(700 + $i) : null,
                'delivered_at' => $status === 'DELIVERED' ? $this->dt(500 + $i) : null,
                'cart_id' => $i,
                'user_id' => $i,
            ]);
        }
    }

    private function seedSocial(): void
    {
        $players = range(1, 8);
        $captains = range(9, 13);

        for ($i = 1; $i <= 20; $i++) {
            $this->insert('posts', [
                'content_text' => sprintf('Post demo %02d pour tester le feed social.', $i),
                'visibility' => $this->cyc(['PUBLIC', 'FRIENDS', 'TEAM_ONLY'], $i),
                'is_deleted' => 0,
                'deleted_at' => null,
                'created_at' => $this->dt(1100 + ($i * 2)),
                'updated_at' => $this->dt(25 + $i),
                'author_user_id' => (($i - 1) % 20) + 1,
            ]);

            $this->insert('post_images', [
                'position' => 1,
                'post_id' => $i,
                'image_id' => $i,
            ]);

            $this->insert('post_likes', [
                'created_at' => $this->dt(600 + $i),
                'post_id' => $i,
                'user_id' => (($i + 4 - 1) % 20) + 1,
            ]);
        }

        for ($i = 1; $i <= 40; $i++) {
            $this->insert('comments', [
                'content_text' => sprintf('Commentaire demo %02d.', $i),
                'is_deleted' => $i % 17 === 0 ? 1 : 0,
                'created_at' => $this->dt(1000 + $i),
                'updated_at' => $this->dt(20 + $i),
                'post_id' => (($i - 1) % 20) + 1,
                'author_user_id' => (($i + 2 - 1) % 20) + 1,
                'parent_comment_id' => $i % 2 === 0 ? $i - 1 : null,
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $from = $i;
            $to = ($i % 20) + 1;
            $status = $this->cyc(['PENDING', 'ACCEPTED', 'REJECTED'], $i);

            $this->insert('friend_requests', [
                'status' => $status,
                'request_message' => sprintf('Requête d’amitié demo %02d.', $i),
                'created_at' => $this->dt(550 + $i),
                'responded_at' => $status === 'PENDING' ? null : $this->dt(300 + $i),
                'from_user_id' => $from,
                'to_user_id' => $to,
            ]);
        }

        $pairCount = 0;
        for ($a = 1; $a <= 20; $a++) {
            for ($b = $a + 1; $b <= 20; $b++) {
                $pairCount++;
                $this->insert('friendships', [
                    'created_at' => $this->dt(520 + $pairCount),
                    'user_id1' => $a,
                    'user_id2' => $b,
                ]);
                if ($pairCount >= 20) {
                    break 2;
                }
            }
        }

        for ($i = 1; $i <= 20; $i++) {
            $teamId = $i;
            $captainId = $this->cyc($captains, $i);
            $invited = $this->cyc($players, $i + 1);
            $inviteStatus = $this->cyc(['PENDING', 'ACCEPTED', 'REFUSED'], $i);
            $joinStatus = $this->cyc(['PENDING', 'ACCEPTED', 'REFUSED'], $i + 1);

            $this->insert('team_invites', [
                'status' => $inviteStatus,
                'message' => sprintf('Invitation équipe demo %02d.', $i),
                'created_at' => $this->dt(480 + $i),
                'responded_at' => $inviteStatus === 'PENDING' ? null : $this->dt(220 + $i),
                'team_id' => $teamId,
                'invited_user_id' => $invited,
                'invited_by_user_id' => $captainId,
            ]);

            $this->insert('team_join_requests', [
                'status' => $joinStatus,
                'note' => sprintf('Je veux rejoindre Team %02d.', $i),
                'created_at' => $this->dt(450 + $i),
                'responded_at' => $joinStatus === 'PENDING' ? null : $this->dt(200 + $i),
                'team_id' => $teamId,
                'user_id' => $this->cyc($players, $i + 3),
                'responded_by_captain_id' => $joinStatus === 'PENDING' ? null : $captainId,
            ]);
        }
    }

    private function seedTournamentDomain(): void
    {
        $organizers = range(14, 17);
        $admins = range(18, 20);
        $orgPool = array_merge($organizers, $admins);

        for ($i = 1; $i <= 20; $i++) {
            $startDays = 10 + $i;
            $format = $this->cyc(['BO1', 'BO3', 'BO5'], $i);

            $this->insert('tournaments', [
                'title' => sprintf('Tournoi Demo %02d', $i),
                'description' => sprintf('Tournoi de démonstration %02d.', $i),
                'rules' => 'Respect des règles, fair-play, validation des scores.',
                'start_date' => $this->futureDate($startDays),
                'end_date' => $this->futureDate($startDays + 1 + ($i % 2)),
                'registration_deadline' => $this->futureDate($startDays - 2),
                'max_teams' => 8 + ($i % 4) * 2,
                'format' => $format,
                'registration_mode' => $this->cyc(['OPEN', 'APPROVAL'], $i),
                'prize_pool' => number_format(100 + ($i * 50), 2, '.', ''),
                'prize_description' => sprintf('Cash + goodies %02d', $i),
                'status' => $this->cyc(['DRAFT', 'OPEN', 'ONGOING', 'FINISHED', 'CANCELLED'], $i),
                'photo_path' => sprintf('/uploads/tournaments/%02d.jpg', $i),
                'created_at' => $this->dt(420 + $i),
                'updated_at' => $this->dt(15 + $i),
                'organizer_user_id' => $this->cyc($orgPool, $i),
                'game_id' => $i,
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $status = $this->cyc(['PENDING', 'ACCEPTED', 'REFUSED'], $i);
            $startDays = 30 + $i;

            $this->insert('tournament_requests', [
                'title' => sprintf('Demande Tournoi %02d', $i),
                'description' => sprintf('Demande de tournoi demo %02d.', $i),
                'rules' => 'Règlement proposé pour validation.',
                'start_date' => $this->futureDate($startDays),
                'end_date' => $this->futureDate($startDays + 2),
                'registration_deadline' => $this->futureDate($startDays - 3),
                'max_teams' => 8 + ($i % 4) * 4,
                'format' => $this->cyc(['BO1', 'BO3', 'BO5'], $i),
                'registration_mode' => $this->cyc(['OPEN', 'APPROVAL'], $i),
                'prize_pool' => number_format(200 + ($i * 75), 2, '.', ''),
                'prize_description' => sprintf('Prize demo %02d', $i),
                'status' => $status,
                'photo_path' => sprintf('/uploads/tournament-requests/%02d.jpg', $i),
                'admin_response_note' => $status === 'PENDING' ? null : sprintf('Réponse admin demo %02d', $i),
                'created_at' => $this->dt(380 + $i),
                'reviewed_at' => $status === 'PENDING' ? null : $this->dt(140 + $i),
                'organizer_user_id' => $this->cyc($organizers, $i),
                'game_id' => (($i + 2 - 1) % 20) + 1,
                'reviewed_by_admin_id' => $status === 'PENDING' ? null : $this->cyc($admins, $i),
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $teams = [$i, ($i % 20) + 1];

            foreach ($teams as $slot => $teamId) {
                $status = $this->cyc(['PENDING', 'ACCEPTED', 'REFUSED', 'CANCELLED'], $i + $slot);
                $accepted = $status === 'ACCEPTED';
                $checked = $accepted && (($i + $slot) % 2 === 0);

                $this->insert('tournament_teams', [
                    'status' => $status,
                    'seed' => $accepted ? ($slot + 1) : null,
                    'registered_at' => $this->dt(350 + ($i * 2) + $slot),
                    'decided_at' => $status === 'PENDING' ? null : $this->dt(120 + ($i * 2) + $slot),
                    'checked_in' => $checked ? 1 : 0,
                    'checkin_at' => $checked ? $this->dt(60 + ($i * 2) + $slot) : null,
                    'tournament_id' => $i,
                    'team_id' => $teamId,
                    'decided_by_user_id' => $status === 'PENDING' ? null : $this->cyc($orgPool, $i + $slot),
                ]);
            }
        }

        for ($i = 1; $i <= 20; $i++) {
            $format = $this->cyc(['BO1', 'BO3', 'BO5'], $i);
            $status = $this->cyc(['SCHEDULED', 'ONGOING', 'FINISHED', 'CANCELLED'], $i);

            $this->insert('matches', [
                'scheduled_at' => $this->dt(-($i * 45)),
                'round_name' => $this->cyc(['Round 1', 'Quarterfinal', 'Semifinal', 'Final'], $i),
                'best_of' => (int) substr($format, -1),
                'status' => $status,
                'created_at' => $this->dt(300 + $i),
                'updated_at' => $this->dt(10 + $i),
                'tournament_id' => $i,
                'result_submitted_by_user_id' => $status === 'FINISHED' ? $this->cyc($orgPool, $i) : null,
            ]);

            $a = $i;
            $b = ($i % 20) + 1;
            $finished = $status === 'FINISHED';

            $this->insert('match_teams', [
                'score' => $finished ? 2 : null,
                'is_winner' => $finished ? 1 : null,
                'match_id' => $i,
                'team_id' => $a,
            ]);
            $this->insert('match_teams', [
                'score' => $finished ? 1 : null,
                'is_winner' => $finished ? 0 : null,
                'match_id' => $i,
                'team_id' => $b,
            ]);
        }
    }

    private function seedMessagingNotificationsReportsQueue(): void
    {
        $admins = range(18, 20);
        $notifTypes = ['FRIEND_REQUEST', 'TEAM_INVITE', 'ORDER_UPDATE', 'COMMENT_REPLY', 'TOURNAMENT'];
        $notifRefs = ['friend_requests', 'team_invites', 'orders', 'comments', 'tournaments'];

        for ($i = 1; $i <= 40; $i++) {
            $sender = (($i - 1) % 20) + 1;
            $receiver = (($i + 3 - 1) % 20) + 1;
            if ($sender === $receiver) {
                $receiver = (($i + 4 - 1) % 20) + 1;
            }
            $read = $i % 3 !== 0;

            $this->insert('messages', [
                'body_text' => sprintf('Message demo %02d entre utilisateurs.', $i),
                'created_at' => $this->dt(260 + $i),
                'is_read' => $read ? 1 : 0,
                'read_at' => $read ? $this->dt(50 + $i) : null,
                'is_deleted_by_sender' => 0,
                'is_deleted_by_receiver' => $i % 11 === 0 ? 1 : 0,
                'sender_user_id' => $sender,
                'receiver_user_id' => $receiver,
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $read = $i % 4 !== 0;
            $refTable = $this->cyc($notifRefs, $i);
            $refId = match ($refTable) {
                'friend_requests' => $i,
                'team_invites' => $i,
                'orders' => $i,
                'comments' => $i,
                'tournaments' => $i,
                default => null,
            };

            $this->insert('notifications', [
                'type' => $this->cyc($notifTypes, $i),
                'ref_table' => $refTable,
                'ref_id' => $refId,
                'content' => sprintf('Notification demo %02d (%s).', $i, $refTable),
                'is_read' => $read ? 1 : 0,
                'read_at' => $read ? $this->dt(30 + $i) : null,
                'created_at' => $this->dt(220 + $i),
                'user_id' => (($i - 1) % 20) + 1,
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $type = $this->cyc(['POST', 'COMMENT', 'USER', 'TEAM'], $i);
            $targetId = match ($type) {
                'POST' => (($i - 1) % 20) + 1,
                'COMMENT' => (($i - 1) % 40) + 1,
                'USER' => (($i - 1) % 20) + 1,
                'TEAM' => (($i - 1) % 20) + 1,
                default => 1,
            };
            $status = $this->cyc(['OPEN', 'IN_REVIEW', 'CLOSED'], $i);

            $this->insert('reports', [
                'target_type' => $type,
                'target_id' => (string) $targetId,
                'reason' => sprintf('Signalement demo %02d pour la modération.', $i),
                'status' => $status,
                'created_at' => $this->dt(200 + $i),
                'handled_at' => $status === 'OPEN' ? null : $this->dt(80 + $i),
                'admin_note' => $status === 'OPEN' ? null : sprintf('Traitement admin %02d', $i),
                'reporter_user_id' => (($i + 1 - 1) % 20) + 1,
                'handled_by_admin_id' => $status === 'OPEN' ? null : $this->cyc($admins, $i),
            ]);
        }

        for ($i = 1; $i <= 20; $i++) {
            $this->insert('messenger_messages', [
                'body' => json_encode(['demo' => true, 'i' => $i], JSON_THROW_ON_ERROR),
                'headers' => json_encode(['type' => 'demo.seed', 'idx' => $i], JSON_THROW_ON_ERROR),
                'queue_name' => 'default',
                'created_at' => $this->dt(100 + $i),
                'available_at' => $this->dt(100 + $i),
                'delivered_at' => null,
            ]);
        }
    }

    private function truncateTables(): void
    {
        $this->db->executeStatement('SET FOREIGN_KEY_CHECKS=0');
        try {
            $platform = $this->db->getDatabasePlatform();
            foreach (self::TABLES as $table) {
                $this->db->executeStatement('TRUNCATE TABLE ' . $platform->quoteIdentifier($table));
            }
        } finally {
            $this->db->executeStatement('SET FOREIGN_KEY_CHECKS=1');
        }
    }

    private function insert(string $table, array $data): void
    {
        $this->db->insert($table, $data);
    }

    private function dt(int $minutes): string
    {
        $sign = $minutes >= 0 ? '-' : '+';
        $abs = abs($minutes);

        return $this->now->modify(sprintf('%s%d minutes', $sign, $abs))->format('Y-m-d H:i:s');
    }

    private function d(int $days): string
    {
        return $this->now->modify(sprintf('-%d days', $days))->format('Y-m-d');
    }

    private function futureDate(int $days): string
    {
        return $this->now->modify(sprintf('+%d days', $days))->format('Y-m-d');
    }

    /**
     * @template T
     * @param list<T> $values
     * @return T
     */
    private function cyc(array $values, int $i)
    {
        if ($values === []) {
            throw new \RuntimeException('Empty cycle source');
        }

        return $values[($i - 1) % count($values)];
    }

    /** @return array<string,int> */
    private function counts(): array
    {
        $tables = [
            'users', 'categories', 'images', 'teams', 'team_members', 'team_invites', 'team_join_requests',
            'games', 'products', 'product_images', 'carts', 'cart_items', 'orders',
            'posts', 'comments', 'post_images', 'post_likes', 'friend_requests', 'friendships',
            'tournaments', 'tournament_requests', 'tournament_teams', 'matches', 'match_teams',
            'messages', 'notifications', 'reports', 'messenger_messages', 'doctrine_migration_versions',
        ];
        $out = [];
        foreach ($tables as $t) {
            $out[$t] = (int) $this->db->fetchOne(sprintf('SELECT COUNT(*) FROM %s', $t));
        }

        return $out;
    }

    private function writeCredentialsCsv(): void
    {
        $path = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'var' . DIRECTORY_SEPARATOR . 'demo-user-credentials.csv';
        $lines = ['role,email,username,password'];

        foreach (range(1, 8) as $i) {
            $lines[] = sprintf('PLAYER,player%02d@pulse.local,player%02d,%s', $i, $i, self::PASSWORD);
        }
        foreach (range(1, 5) as $i) {
            $lines[] = sprintf('CAPTAIN,captain%02d@pulse.local,captain%02d,%s', $i, $i, self::PASSWORD);
        }
        foreach (range(1, 4) as $i) {
            $lines[] = sprintf('ORGANIZER,organizer%02d@pulse.local,organizer%02d,%s', $i, $i, self::PASSWORD);
        }
        foreach (range(1, 3) as $i) {
            $lines[] = sprintf('ADMIN,admin%02d@pulse.local,admin%02d,%s', $i, $i, self::PASSWORD);
        }

        file_put_contents($path, implode(PHP_EOL, $lines) . PHP_EOL);
    }
}
