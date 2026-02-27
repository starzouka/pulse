# FICHE DE TRAVAIL - VERSION PRETE A IMPRIMER

Projet: PULSE  
Date: 2026-02-13  

---

## Sommaire

1. Architecture FO/BO (layout, partials, navigation)
2. Securite & Auth
3. Profil & Social
4. Amis, Messages, Notifications
5. Equipes & Capitaine
6. Tournois & Organisateur (FO)
7. Matchs (FO + Organisateur)
8. Boutique (Games/Shop/Cart/Orders)
9. Back Office Admin (CRUD + exports)
10. Validation serveur (formulaires + entites)
11. Utilitaires transverses
12. Configuration & migrations

<div style="page-break-after: always;"></div>

## 1) Module Architecture FO/BO

### Travail realise de A a Z
1. Integration du template FO dans `base.html.twig`.
2. Integration du template BO admin dans `base_admin.html.twig`.
3. Decoupage en partials reutilisables (topbar, sidebar, footer, hero, etc.).
4. Uniformisation du rendu commun sur les pages FO et BO.
5. Factorisation de champs formulaires repetes via partials shared.

### Fichiers (emplacements)
- `templates/base.html.twig`
- `templates/admin/base_admin.html.twig`
- `templates/admin/Partials/navbar.html.twig`
- `templates/admin/Partials/sidebar.html.twig`
- `templates/admin/Partials/footer.html.twig`
- `templates/front/partials/_top_nav.html.twig`
- `templates/front/partials/_hero_full.html.twig`
- `templates/front/partials/_hero_mini.html.twig`
- `templates/front/partials/_footer.html.twig`
- `templates/front/partials/_auth_modal.html.twig`
- `templates/front/partials/_account_sidebar.html.twig`
- `templates/front/partials/_player_side_nav.html.twig`
- `templates/front/partials/_captain_side_nav.html.twig`
- `templates/front/partials/_organizer_side_nav.html.twig`
- `templates/front/partials/_captain_team_selector.html.twig`
- `templates/front/partials/_post_card.html.twig`
- `templates/front/partials/_post_composer.html.twig`
- `templates/front/partials/_pagination.html.twig`
- `templates/shared/_tournament_form_fields.html.twig`
- `templates/shared/_organizer_match_form_fields.html.twig`
- `public/assets/template_bo/js/app.js`

<div style="page-break-after: always;"></div>

## 2) Module Securite & Auth

### Travail realise de A a Z
1. Definition de l'entite utilisateur avec roles metier.
2. Mapping role metier -> roles Symfony.
3. Login form authenticator et logout.
4. Register avec hash du mot de passe.
5. Verification email par lien.
6. Mot de passe oublie + reset par token.
7. Regles d'acces dans `security.yaml`.
8. Templates FO/Email pour les flux auth.

### Fichiers (emplacements)
- `config/packages/security.yaml`
- `config/packages/verify_email.yaml`
- `config/packages/mailer.yaml`
- `src/Entity/User.php`
- `src/Security/LoginFormAuthenticator.php`
- `src/Security/UserChecker.php`
- `src/Security/EmailVerifier.php`
- `src/Controller/Security/LoginController.php`
- `src/Controller/Security/VerifyEmailController.php`
- `src/Controller/Front/Page/LoginController.php`
- `src/Controller/Front/Page/RegisterController.php`
- `src/Controller/Front/Page/ForgotPasswordController.php`
- `src/Controller/Front/Page/ResetPasswordController.php`
- `src/Controller/Front/Page/PasswordChangeController.php`
- `src/Form/RegistrationFormType.php`
- `src/Form/ForgotPasswordRequestType.php`
- `src/Form/ResetPasswordType.php`
- `src/Form/PasswordChangeType.php`
- `templates/front/pages/login.html.twig`
- `templates/front/pages/register.html.twig`
- `templates/front/pages/forgot-password.html.twig`
- `templates/front/pages/reset-password.html.twig`
- `templates/front/pages/password-change.html.twig`
- `templates/security/login.html.twig`
- `templates/emails/confirmation_email.html.twig`
- `templates/emails/reset_password_email.html.twig`

<div style="page-break-after: always;"></div>

## 3) Module Profil & Social

### Travail realise de A a Z
1. Modelisation des entites social (post/comment/like/report).
2. Repositories pour lecture/ecriture.
3. Formulaires de creation/modification.
4. Pages dashboard/feed/profil.
5. Logique publication, commentaires, likes, signalements.
6. Composants UI post card et post composer.
7. Validation serveur des donnees.

### Fichiers (emplacements)
- `src/Entity/Post.php`
- `src/Entity/PostImage.php`
- `src/Entity/PostLike.php`
- `src/Entity/Comment.php`
- `src/Entity/Report.php`
- `src/Repository/PostRepository.php`
- `src/Repository/PostImageRepository.php`
- `src/Repository/PostLikeRepository.php`
- `src/Repository/CommentRepository.php`
- `src/Repository/ReportRepository.php`
- `src/Form/PostType.php`
- `src/Form/PostImageType.php`
- `src/Form/CommentType.php`
- `src/Form/ReportType.php`
- `src/Service/Post/FeedPostAssembler.php`
- `src/Service/Post/PostImageUploader.php`
- `src/Service/Profile/ProfilePageDataProvider.php`
- `src/Controller/Front/Page/DashboardController.php`
- `src/Controller/Front/Page/FeedController.php`
- `src/Controller/Front/Page/FeedPublicController.php`
- `src/Controller/Front/Page/PostCreateController.php`
- `src/Controller/Front/Page/PostDetailController.php`
- `src/Controller/Front/Page/ProfileController.php`
- `src/Controller/Front/Page/ProfileEditController.php`
- `src/Controller/Front/Page/PlayerProfileController.php`
- `templates/front/pages/dashboard.html.twig`
- `templates/front/pages/feed.html.twig`
- `templates/front/pages/feed-public.html.twig`
- `templates/front/pages/post-create.html.twig`
- `templates/front/pages/post-detail.html.twig`
- `templates/front/pages/profile.html.twig`
- `templates/front/pages/profile-edit.html.twig`
- `templates/front/pages/player-profile.html.twig`

<div style="page-break-after: always;"></div>

## 4) Module Amis, Messages, Notifications

### Travail realise de A a Z
1. Workflow amities (demandes + acceptation).
2. Messagerie privee avec gestion unread.
3. Notifications utilisateur.
4. Recherche conversation et tri serveur.
5. Correction DQL sur groupement par partner.
6. Validation serveur des formulaires message.

### Fichiers (emplacements)
- `src/Entity/FriendRequest.php`
- `src/Entity/Friendship.php`
- `src/Entity/Message.php`
- `src/Entity/Notification.php`
- `src/Repository/FriendRequestRepository.php`
- `src/Repository/FriendshipRepository.php`
- `src/Repository/MessageRepository.php`
- `src/Repository/NotificationRepository.php`
- `src/Form/FriendRequestType.php`
- `src/Form/FriendshipType.php`
- `src/Form/MessageType.php`
- `src/Form/NotificationType.php`
- `src/Controller/Front/Page/FriendsController.php`
- `src/Controller/Front/Page/MessagesController.php`
- `src/Controller/Front/Page/ConversationController.php`
- `src/Controller/Front/Page/NotificationsController.php`
- `templates/front/pages/friends.html.twig`
- `templates/front/pages/messages.html.twig`
- `templates/front/pages/conversation.html.twig`
- `templates/front/pages/notifications.html.twig`

<div style="page-break-after: always;"></div>

## 5) Module Equipes & Capitaine

### Travail realise de A a Z
1. Gestion equipes, membres, invites, demandes.
2. Gestion capitaine et droits par equipe.
3. Navigation capitaine (membres, demandes, inviter, produits, commandes).
4. Pages front dediees capitaine.
5. Verification d'acces via voter.

### Fichiers (emplacements)
- `src/Entity/Team.php`
- `src/Entity/TeamMember.php`
- `src/Entity/TeamInvite.php`
- `src/Entity/TeamJoinRequest.php`
- `src/Repository/TeamRepository.php`
- `src/Repository/TeamMemberRepository.php`
- `src/Repository/TeamInviteRepository.php`
- `src/Repository/TeamJoinRequestRepository.php`
- `src/Form/TeamType.php`
- `src/Form/TeamMemberType.php`
- `src/Form/TeamInviteType.php`
- `src/Form/TeamJoinRequestType.php`
- `src/Security/CaptainAccess.php`
- `src/Security/Voter/TeamVoter.php`
- `src/Service/Captain/CaptainTeamContextProvider.php`
- `src/Controller/Front/Page/MyTeamsController.php`
- `src/Controller/Front/Page/MyRequestsController.php`
- `src/Controller/Front/Page/CaptainTeamCreateController.php`
- `src/Controller/Front/Page/CaptainTeamManageController.php`
- `src/Controller/Front/Page/CaptainMembersController.php`
- `src/Controller/Front/Page/CaptainRequestsController.php`
- `src/Controller/Front/Page/CaptainInviteController.php`
- `templates/front/pages/my-teams.html.twig`
- `templates/front/pages/my-requests.html.twig`
- `templates/front/pages/captain-team-create.html.twig`
- `templates/front/pages/captain-team-manage.html.twig`
- `templates/front/pages/captain-members.html.twig`
- `templates/front/pages/captain-requests.html.twig`
- `templates/front/pages/captain-invite.html.twig`

<div style="page-break-after: always;"></div>

## 6) Module Tournois & Organisateur (FO)

### Travail realise de A a Z
1. Workflow demande tournoi -> validation admin -> tournoi.
2. Formulaires organisateur complets.
3. Upload photo tournoi.
4. Pages organizer requests/tournaments/detail/registrations.
5. Recherche, tri, filtres cote serveur.
6. Synchronisation data FO/BO.

### Fichiers (emplacements)
- `src/Entity/TournamentRequest.php`
- `src/Entity/Tournament.php`
- `src/Entity/TournamentTeam.php`
- `src/Repository/TournamentRequestRepository.php`
- `src/Repository/TournamentRepository.php`
- `src/Repository/TournamentTeamRepository.php`
- `src/Form/TournamentRequestType.php`
- `src/Form/TournamentType.php`
- `src/Form/TournamentTeamType.php`
- `src/Service/Media/ImageUploader.php`
- `src/Controller/Front/Page/TournamentsController.php`
- `src/Controller/Front/Page/TournamentDetailController.php`
- `src/Controller/Front/Page/OrganizerRequestsController.php`
- `src/Controller/Front/Page/OrganizerRequestCreateController.php`
- `src/Controller/Front/Page/OrganizerRequestDetailController.php`
- `src/Controller/Front/Page/OrganizerTournamentsController.php`
- `src/Controller/Front/Page/OrganizerTournamentDetailController.php`
- `src/Controller/Front/Page/OrganizerTournamentEditController.php`
- `src/Controller/Front/Page/OrganizerRegistrationsController.php`
- `templates/front/pages/tournaments.html.twig`
- `templates/front/pages/tournament-detail.html.twig`
- `templates/front/pages/organizer-requests.html.twig`
- `templates/front/pages/organizer-request-create.html.twig`
- `templates/front/pages/organizer-request-detail.html.twig`
- `templates/front/pages/organizer-tournaments.html.twig`
- `templates/front/pages/organizer-tournament-detail.html.twig`
- `templates/front/pages/organizer-tournament-edit.html.twig`
- `templates/front/pages/organizer-registrations.html.twig`
- `templates/shared/_tournament_form_fields.html.twig`
- `templates/emails/tournament_request_review_email.html.twig`

<div style="page-break-after: always;"></div>

## 7) Module Matchs (FO + Organisateur)

### Travail realise de A a Z
1. Matchs relies aux tournois.
2. Gestion equipes participantes via `match_teams`.
3. Formulaire match avec participants, score, winner.
4. Rechargement dynamique des participants par tournoi.
5. Pages matches, match-detail, organizer match create/edit.
6. Tri, filtre, recherche serveur.

### Fichiers (emplacements)
- `src/Entity/TournamentMatch.php`
- `src/Entity/MatchTeam.php`
- `src/Repository/TournamentMatchRepository.php`
- `src/Repository/MatchTeamRepository.php`
- `src/Form/TournamentMatchType.php`
- `src/Form/MatchTeamType.php`
- `src/Controller/Shared/TournamentParticipantTeamsLookupController.php`
- `src/Controller/Front/Page/MatchesController.php`
- `src/Controller/Front/Page/MatchDetailController.php`
- `src/Controller/Front/Page/OrganizerMatchesController.php`
- `src/Controller/Front/Page/OrganizerMatchCreateController.php`
- `src/Controller/Front/Page/OrganizerMatchEditController.php`
- `templates/front/pages/matches.html.twig`
- `templates/front/pages/match-detail.html.twig`
- `templates/front/pages/organizer-matches.html.twig`
- `templates/front/pages/organizer-match-create.html.twig`
- `templates/front/pages/organizer-match-edit.html.twig`
- `templates/shared/_organizer_match_form_fields.html.twig`

<div style="page-break-after: always;"></div>

## 8) Module Boutique (Games, Shop, Cart, Orders)

### Travail realise de A a Z
1. Catalogue jeux/categories.
2. Catalogue produits boutique.
3. Details jeu/produit.
4. Panier et checkout.
5. Commandes utilisateur.
6. Validation et recherche serveur.

### Fichiers (emplacements)
- `src/Entity/Category.php`
- `src/Entity/Game.php`
- `src/Entity/Product.php`
- `src/Entity/ProductImage.php`
- `src/Entity/Cart.php`
- `src/Entity/CartItem.php`
- `src/Entity/Order.php`
- `src/Repository/CategoryRepository.php`
- `src/Repository/GameRepository.php`
- `src/Repository/ProductRepository.php`
- `src/Repository/ProductImageRepository.php`
- `src/Repository/CartRepository.php`
- `src/Repository/CartItemRepository.php`
- `src/Repository/OrderRepository.php`
- `src/Form/CategoryType.php`
- `src/Form/GameType.php`
- `src/Form/ProductType.php`
- `src/Form/ProductImageType.php`
- `src/Form/CartType.php`
- `src/Form/CartItemType.php`
- `src/Form/OrderType.php`
- `src/Service/Shop/CartManager.php`
- `src/Controller/Front/Page/GamesController.php`
- `src/Controller/Front/Page/GameDetailController.php`
- `src/Controller/Front/Page/ShopController.php`
- `src/Controller/Front/Page/ProductDetailController.php`
- `src/Controller/Front/Page/CartController.php`
- `src/Controller/Front/Page/CheckoutController.php`
- `src/Controller/Front/Page/OrdersController.php`
- `src/Controller/Front/Page/OrderDetailController.php`
- `templates/front/pages/games.html.twig`
- `templates/front/pages/game-detail.html.twig`
- `templates/front/pages/shop.html.twig`
- `templates/front/pages/product-detail.html.twig`
- `templates/front/pages/cart.html.twig`
- `templates/front/pages/checkout.html.twig`
- `templates/front/pages/orders.html.twig`
- `templates/front/pages/order-detail.html.twig`

<div style="page-break-after: always;"></div>

## 9) Module Back Office Admin (CRUD + Export)

### Travail realise de A a Z
1. Dashboard admin.
2. CRUD complet sur modules admin.
3. Tables admin avec recherche/tri/filtres serveur.
4. Export PDF/Excel des listes.
5. Ecrans detail + formulaires de mise a jour.

### Fichiers (emplacements)
- `src/Controller/Admin/DashboardController.php`
- `src/Controller/Admin/AddUserController.php`
- `src/Controller/Admin/Page/UsersController.php`
- `src/Controller/Admin/Page/UserCreateController.php`
- `src/Controller/Admin/Page/UserEditController.php`
- `src/Controller/Admin/Page/UserDetailController.php`
- `src/Controller/Admin/Page/PostsController.php`
- `src/Controller/Admin/Page/PostDetailController.php`
- `src/Controller/Admin/Page/CommentsController.php`
- `src/Controller/Admin/Page/ReportsController.php`
- `src/Controller/Admin/Page/ReportDetailController.php`
- `src/Controller/Admin/Page/MessagesController.php`
- `src/Controller/Admin/Page/NotificationsController.php`
- `src/Controller/Admin/Page/TeamsController.php`
- `src/Controller/Admin/Page/TeamDetailController.php`
- `src/Controller/Admin/Page/TeamMembersController.php`
- `src/Controller/Admin/Page/TeamInvitesController.php`
- `src/Controller/Admin/Page/TeamRequestsController.php`
- `src/Controller/Admin/Page/CategoriesController.php`
- `src/Controller/Admin/Page/CategoryFormController.php`
- `src/Controller/Admin/Page/GamesController.php`
- `src/Controller/Admin/Page/GameFormController.php`
- `src/Controller/Admin/Page/GameDetailController.php`
- `src/Controller/Admin/Page/ProductsController.php`
- `src/Controller/Admin/Page/ProductFormController.php`
- `src/Controller/Admin/Page/ProductDetailController.php`
- `src/Controller/Admin/Page/CartsController.php`
- `src/Controller/Admin/Page/OrdersController.php`
- `src/Controller/Admin/Page/OrderDetailController.php`
- `src/Controller/Admin/Page/TournamentRequestsController.php`
- `src/Controller/Admin/Page/TournamentRequestDetailController.php`
- `src/Controller/Admin/Page/TournamentsController.php`
- `src/Controller/Admin/Page/TournamentFormController.php`
- `src/Controller/Admin/Page/TournamentDetailController.php`
- `src/Controller/Admin/Page/TournamentTeamsController.php`
- `src/Controller/Admin/Page/MatchesController.php`
- `src/Controller/Admin/Page/MatchDetailController.php`
- `src/Controller/Admin/Page/MatchTeamsController.php`
- `src/Controller/Admin/Page/ImagesController.php`
- `src/Service/Admin/TableExportService.php`
- `templates/admin/base_admin.html.twig`
- `templates/admin/pages/users.html.twig`
- `templates/admin/pages/user-create.html.twig`
- `templates/admin/pages/user-edit.html.twig`
- `templates/admin/pages/user-detail.html.twig`
- `templates/admin/pages/posts.html.twig`
- `templates/admin/pages/post-detail.html.twig`
- `templates/admin/pages/comments.html.twig`
- `templates/admin/pages/reports.html.twig`
- `templates/admin/pages/report-detail.html.twig`
- `templates/admin/pages/messages.html.twig`
- `templates/admin/pages/notifications.html.twig`
- `templates/admin/pages/teams.html.twig`
- `templates/admin/pages/team-detail.html.twig`
- `templates/admin/pages/team-members.html.twig`
- `templates/admin/pages/team-invites.html.twig`
- `templates/admin/pages/team-requests.html.twig`
- `templates/admin/pages/categories.html.twig`
- `templates/admin/pages/category-form.html.twig`
- `templates/admin/pages/games.html.twig`
- `templates/admin/pages/game-form.html.twig`
- `templates/admin/pages/game-detail.html.twig`
- `templates/admin/pages/products.html.twig`
- `templates/admin/pages/product-form.html.twig`
- `templates/admin/pages/product-detail.html.twig`
- `templates/admin/pages/carts.html.twig`
- `templates/admin/pages/orders.html.twig`
- `templates/admin/pages/order-detail.html.twig`
- `templates/admin/pages/tournament-requests.html.twig`
- `templates/admin/pages/tournament-request-detail.html.twig`
- `templates/admin/pages/tournaments.html.twig`
- `templates/admin/pages/tournament-form.html.twig`
- `templates/admin/pages/tournament-detail.html.twig`
- `templates/admin/pages/tournament-teams.html.twig`
- `templates/admin/pages/matches.html.twig`
- `templates/admin/pages/match-detail.html.twig`
- `templates/admin/pages/match-teams.html.twig`
- `templates/admin/pages/images.html.twig`

<div style="page-break-after: always;"></div>

## 10) Module Validation Serveur

### Travail realise de A a Z
1. Contraintes `Assert` ajoutees dans les entites metier.
2. Contraintes ajoutees dans les FormType.
3. Validation cross-field sur dates tournoi.
4. Flux `isSubmitted() && isValid()` sur controlleurs formulaires.
5. `novalidate` + `form_errors` sur les vues formulaires.

### Fichiers (emplacements)
- `src/Entity/User.php`
- `src/Entity/Tournament.php`
- `src/Entity/TournamentRequest.php`
- `src/Entity/TournamentMatch.php`
- `src/Entity/Post.php`
- `src/Entity/Comment.php`
- `src/Entity/Message.php`
- `src/Entity/Report.php`
- `src/Entity/Team.php`
- `src/Entity/Game.php`
- `src/Entity/Category.php`
- `src/Entity/Product.php`
- `src/Entity/Cart.php`
- `src/Entity/CartItem.php`
- `src/Entity/Order.php`
- `src/Entity/MatchTeam.php`
- `src/Entity/TeamMember.php`
- `src/Entity/TournamentTeam.php`
- `src/Form/UserType.php`
- `src/Form/RegistrationFormType.php`
- `src/Form/ProfileEditType.php`
- `src/Form/ForgotPasswordRequestType.php`
- `src/Form/ResetPasswordType.php`
- `src/Form/PasswordChangeType.php`
- `src/Form/TournamentType.php`
- `src/Form/TournamentRequestType.php`
- `src/Form/TournamentMatchType.php`
- `src/Form/PostType.php`
- `src/Form/CommentType.php`
- `src/Form/MessageType.php`
- `src/Form/ReportType.php`
- `templates/front/pages/register.html.twig`
- `templates/front/pages/forgot-password.html.twig`
- `templates/front/pages/reset-password.html.twig`
- `templates/front/pages/password-change.html.twig`
- `templates/front/pages/profile-edit.html.twig`
- `templates/front/pages/organizer-request-create.html.twig`
- `templates/front/pages/organizer-tournament-detail.html.twig`
- `templates/front/pages/organizer-match-create.html.twig`
- `templates/front/pages/organizer-match-edit.html.twig`
- `templates/admin/pages/user-create.html.twig`
- `templates/admin/pages/user-edit.html.twig`
- `templates/admin/pages/posts.html.twig`
- `templates/admin/pages/post-detail.html.twig`
- `templates/admin/pages/comments.html.twig`
- `templates/admin/pages/messages.html.twig`
- `templates/admin/pages/reports.html.twig`
- `templates/admin/pages/report-detail.html.twig`
- `templates/admin/pages/matches.html.twig`
- `templates/admin/pages/tournament-form.html.twig`

<div style="page-break-after: always;"></div>

## 11) Module Utilitaires Transverses

### Travail realise de A a Z
1. Extension Twig pour contexte utilisateur.
2. Trait de pagination reutilisable.
3. Endpoint shared pour participants tournoi.
4. Consolidation FO/Admin/Security.

### Fichiers (emplacements)
- `src/Twig/UserContextExtension.php`
- `src/Controller/Front/Page/PaginatesCollectionsTrait.php`
- `src/Controller/Shared/TournamentParticipantTeamsLookupController.php`
- `src/Controller/Front/HomeController.php`

<div style="page-break-after: always;"></div>

## 12) Module Configuration & Migrations

### Travail realise de A a Z
1. Parametrage Doctrine, Security, Mailer, Validator.
2. Migrations synchronisees avec le schema.
3. Variables d'environnement pour base et mail.

### Fichiers (emplacements)
- `config/packages/doctrine.yaml`
- `config/packages/doctrine_migrations.yaml`
- `config/packages/security.yaml`
- `config/packages/mailer.yaml`
- `config/packages/validator.yaml`
- `config/packages/verify_email.yaml`
- `config/packages/framework.yaml`
- `migrations/Version20260211112802.php`
- `migrations/Version20260211222000.php`
- `migrations/Version20260211230000.php`
- `.env`
- `.env.local`

---

## Impression

1. Ouvre ce fichier: `docs/FICHE_TRAVAIL_MODULES_PRET_IMPRESSION.md`
2. Lance l'impression depuis ton IDE/navigateur (Ctrl+P)
3. Format conseille: A4, marges standard, echelle 100%

