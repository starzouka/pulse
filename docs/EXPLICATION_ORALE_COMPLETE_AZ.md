# GUIDE ORAL COMPLET - PROJET PULSE (Symfony/PHP)

## Comment lire ce document
Ce document est ecrit pour des debutants complets.
Objectif: vous permettre d'expliquer le projet demain, de A a Z, meme sans background web.

Il couvre:
- ce qu'est Symfony et comment une page fonctionne techniquement
- la logique MVC (Entity / Repository / Form / Controller / Twig)
- les roles (PLAYER, CAPTAIN, ORGANIZER, ADMIN), la session et la securite
- vos modules par personne (User/Social, Jeux, Tournois/Matchs, Equipes, Shop)
- les pages Front Office et Back Office, avec leur logique metier
- les controles de saisie (validation serveur)
- les fichiers importants par module

---

## 1) Vision globale du projet

### 1.1 Stack technique
- Langage: PHP
- Framework: Symfony 6.4
- ORM: Doctrine (Entity + Repository + migration SQL)
- Templates: Twig
- Base de donnees: MySQL
- Front assets: template FO/BO + JS/CSS
- Mail: Symfony Mailer
- Export: PDF (Dompdf) + Excel (PhpSpreadsheet)

### 1.2 Architecture principale
- `src/Entity`: modeles de donnees (tables)
- `src/Repository`: requetes SQL via Doctrine (recherche/tri/filtre cote serveur)
- `src/Form`: formulaires + contraintes supplementaires
- `src/Controller`: logique HTTP (routes + actions)
- `templates`: affichage Twig (FO/BO)
- `config/packages/security.yaml`: auth, roles, firewall, access control
- `src/Security`: authenticator, check utilisateur, verification email, voters
- `src/Service`: logique metier reutilisable (panier, export, profile, posts, captain)

### 1.3 Repartition modules (comme votre equipe)
- Module 1 (toi): Utilisateur + Social
- Module 2: Jeux + Categories
- Module 3: Tournois + Matchs
- Module 4: Equipes + Membres
- Module 5: Shop (Produits + Panier + Commandes)

---

## 2) Symfony tres simple: comment une page fonctionne

Quand un utilisateur ouvre une URL:
1. Symfony lit la route (`#[Route(...)]`) dans un Controller.
2. Il execute la methode du Controller.
3. Le Controller lit les donnees en base via un Repository.
4. Le Controller peut aussi traiter un Form (`handleRequest`, `isSubmitted`, `isValid`).
5. Il renvoie une reponse HTML via Twig (`render('...')`) ou JSON.
6. Le navigateur affiche la page.

C'est le cycle HTTP standard MVC.

---

## 3) MVC dans votre projet (definition claire)

### 3.1 Entity (Modele)
Une Entity = representation PHP d'une table SQL.
Exemple: `User`, `Post`, `Tournament`, `Team`, `Order`.

Role:
- definir les colonnes (attributs)
- definir les relations (ManyToOne, OneToMany, etc.)
- porter des contraintes de validation (`Assert\*`)
- fournir getters/setters

### 3.2 Repository
Classe de lecture/ecriture avancee de la table.

Role:
- centraliser les requetes dynamiques (search, filter, sort)
- eviter du SQL disperse dans les controllers
- rendre les pages performantes et maintenables

Exemple concret:
- `UserRepository::searchForAdmin(...)`
- `PostRepository::searchVisiblePaged(...)`
- `TournamentRepository::searchCatalog(...)`
- `ProductRepository::searchForShop(...)`

### 3.3 Form
Classe qui decrit les champs + contraintes + mapping.

Role:
- normaliser la saisie
- proteger contre les donnees invalides
- faciliter le rendu Twig (`form_row`, `form_errors`)

### 3.4 Controller
Point d'entree HTTP.

Role:
- verifier auth/role
- lire query params
- appeler repository/service
- traiter les formulaires
- appliquer les regles metier
- retourner vue Twig / redirection / JSON

### 3.5 Twig
C'est la couche d'affichage.

Role:
- afficher les donnees du controller
- generer les liens (`path()`)
- charger assets (`asset()`)
- afficher les erreurs de formulaire

---

## 4) Securite complete (tres importante pour l'oral)

### 4.1 `security.yaml` (fichier central)
Fichier: `config/packages/security.yaml`

Ce qu'il fait:
- hash password auto pour `App\Entity\User`
- provider utilisateur via table `users`, champ `email`
- authenticator custom: `App\Security\LoginFormAuthenticator`
- `UserChecker` pour bloquer compte inactif et email non verifie
- remember_me (session prolongee)
- logout route `app_logout`
- protection d'URL avec `access_control`

Regles d'acces configurees:
- `/admin*` => `ROLE_ADMIN`
- `/pages/organizer*` => `ROLE_ORGANIZER`
- `/pages/captain*` => `ROLE_CAPTAIN`
- pages utilisateur sensibles (`dashboard/messages/cart/...`) => connecte obligatoire

### 4.2 Roles metier vs roles Symfony
Dans `User` vous stockez le role metier en DB: `PLAYER`, `CAPTAIN`, `ORGANIZER`, `ADMIN`.

Puis `User::getRoles()` convertit vers roles Symfony:
- PLAYER => `ROLE_PLAYER`
- CAPTAIN => `ROLE_PLAYER` + `ROLE_CAPTAIN`
- ORGANIZER => `ROLE_PLAYER` + `ROLE_ORGANIZER`
- ADMIN => `ROLE_PLAYER` + `ROLE_ADMIN`

### 4.3 Hierarchie de roles
Dans `security.yaml`:
- `ROLE_ADMIN` herite de organizer/captain/player
- `ROLE_CAPTAIN` herite de player
- `ROLE_ORGANIZER` herite de player

### 4.4 Session, login, logout
- login form route: `/pages/login`
- authenticator: `src/Security/LoginFormAuthenticator.php`
- stocke last username en session
- verifie mot de passe hashe
- CSRF badge actif
- remember-me badge actif
- redirection target path si existe, sinon home

Logout:
- route `/logout` (`app_logout`)
- la methode controller est "intercepted" par firewall

### 4.5 Verification email obligatoire
- `RegisterController` cree le compte avec `emailVerified=false`
- envoie un lien signe via `EmailVerifier`
- `VerifyEmailController` valide le lien signe
- puis active le compte (`setEmailVerified(true)`)
- `UserChecker` empeche login si email pas verifie

### 4.6 Mot de passe oublie
- route: `/pages/forgot-password`
- si email absent: message "cet email n'existe pas"
- si email present:
  - genere token random
  - stocke hash token + date expiration en base
  - envoie lien de reset
- route reset: `/pages/reset-password?token=...`
- verifie hash + expiration
- remplace password hash puis efface token

### 4.7 Droit capitaine (logique metier)
Capitaine existe comme role DB (`CAPTAIN`) + logique equipe.

Composants:
- `CaptainAccess` verifie si user est capitaine d'au moins 1 team
- `CaptainTeamContextProvider` resout team active du capitaine
- `TeamVoter` autorise `TEAM_EDIT`, `TEAM_INVITE`, etc. si user est captain de CETTE team (ou admin)

---
## 5) Validation des formulaires (serveur)

Methode appliquee:
- contraintes dans entites (`Assert\NotBlank`, `Length`, `Choice`, `Email`, `Type`, `Regex`, etc.)
- contraintes formulaire pour champs non mappes (ex: upload file, plainPassword)
- dans controllers: `if ($form->isSubmitted() && $form->isValid())`
- dans Twig: `form_start(... novalidate ...)` + `form_errors`

Point demande recemment:
- Prize Pool numerique uniquement
- implemente via:
  - Entity `Tournament` / `TournamentRequest`: `Assert\Type('numeric')` + `PositiveOrZero`
  - Form `TournamentType` / `TournamentRequestType`: NumberType + contraintes numeriques

---

## 6) Front Office commun (layout reusable)

Fichiers:
- `templates/base.html.twig` (base FO)
- `templates/front/partials/_hero_full.html.twig`
- `templates/front/partials/_top_nav.html.twig`
- `templates/front/partials/_footer.html.twig`
- `templates/front/partials/_account_sidebar.html.twig`

Principe:
- hero/topnav/footer reutilises
- menu bouton ouvre sidebar compte (droite, animation)
- contenu sidebar adapte selon role (`front_role(app.user)`)
- assets centralises via `asset()`

JS global FO:
- `public/assets/template_fo/js/app.js`
- fonctions cle:
  - menu/sidebar account
  - cards cliquables
  - scroll horizontal sections home
  - auto-submit formulaires GET (recherche/tri/filtre dynamiques)
  - infinite scroll feed (`/pages/feed/chunk`)

Important pour l'oral:
- "dynamique" chez vous = JS declenche submit auto
- mais la recherche/filtre/tri restent faits cote serveur (Repository SQL)

---

## 7) MODULE USER + SOCIAL (ton module) - detail complet

### 7.1 Entites de ton module
- `User`
- `FriendRequest`
- `Friendship`
- `Post`
- `PostImage`
- `PostLike`
- `Comment`
- `Report`
- `Message`
- `Notification`
- `Image` (photo profil/post)

### 7.2 Repositories de ton module
- `UserRepository`
- `FriendRequestRepository`
- `FriendshipRepository`
- `PostRepository`
- `PostImageRepository`
- `PostLikeRepository`
- `CommentRepository`
- `ReportRepository`
- `MessageRepository`
- `NotificationRepository`

### 7.3 Services de ton module
- `ProfilePageDataProvider` (agregation donnees profil)
- `FeedPostAssembler` (assemble post + likes + comments + images)
- `PostImageUploader` (upload multi-images post)
- `ImageUploader` (media utilitaire)

### 7.4 Pages User/Auth (FO)

#### a) Inscription `/pages/register`
Controller: `RegisterController`
Template: `templates/front/pages/register.html.twig`
Form: `RegistrationFormType`

Logique:
- cree `User`
- hash password (PasswordHasher)
- role choisi (PLAYER/CAPTAIN/ORGANIZER)
- persist user
- envoi mail verification (si MAILER_DSN configure)

#### b) Login `/pages/login`
Controller: `LoginController`
Template: `templates/front/pages/login.html.twig`

Logique:
- page lit erreurs d'auth
- verification credentials geree par `LoginFormAuthenticator`

#### c) Verify email `/verify/email`
Controller: `VerifyEmailController`

Logique:
- verifie signature securisee
- active `emailVerified`

#### d) Forgot password `/pages/forgot-password`
Controller: `ForgotPasswordController`
Template: `forgot-password.html.twig`
Form: `ForgotPasswordRequestType`

Logique:
- verifie email existe
- cree token hash + expiration
- envoie mail reset

#### e) Reset password `/pages/reset-password`
Controller: `ResetPasswordController`
Template: `reset-password.html.twig`
Form: `ResetPasswordType`

Logique:
- verifie token + expiration
- hash nouveau mot de passe
- nettoie token

#### f) Profile `/pages/profile`
Controller: `ProfileController`
Template: `profile.html.twig`

Logique:
- charge onglets profile (posts/about/friends/teams)
- cree post (texte + multi-image)
- like/unlike post
- commentaire post
- report post
- add friend
- tout protege par CSRF

#### g) Profile edit `/pages/profile-edit`
Controller: `ProfileEditController`
Template: `profile-edit.html.twig`
Form: `ProfileEditType`

Logique:
- update infos user
- upload photo profil -> cree `Image` -> lie a `User.profileImageId`

#### h) Password change `/pages/password-change`
Controller: `PasswordChangeController`
Template: `password-change.html.twig`
Form: `PasswordChangeType`

Logique:
- verifie current password
- refuse re-utilisation meme password
- hash et sauvegarde nouveau

### 7.5 Pages Social

#### a) Feed `/pages/feed`
Controller: `FeedController`
Template: `feed.html.twig`

Logique:
- listing posts avec filtres (query, visibility, sort)
- creation post texte+images
- like/comment/report/delete
- chunk API `/pages/feed/chunk` pour infinite scroll
- rendu card post via partial `_post_card.html.twig`

#### b) Dashboard `/pages/dashboard`
Controller: `DashboardController`

Logique:
- dashboard social/compte (selon vos ecrans)
- widgets derives de donnees utilisateur/social

#### c) Players `/pages/players`
Controller: `PlayersController`
Template: `players.html.twig`

Logique:
- recherche joueurs en DB (role/country/sort)
- pagination

#### d) Player profile `/pages/player-profile/{id}`
Controller: `PlayerProfileController`

Logique:
- vue profil d'un autre user
- actions contextuelles (ajout ami, message)

#### e) Friends `/pages/friends`
Controller: `FriendsController`

Logique:
- onglets: mes amis / recues / envoyees
- filtres + tri serveur
- accept/refuse/cancel requetes
- creation `Friendship` a l'acceptation

#### f) Messages `/pages/messages`
Controller: `MessagesController`

Logique:
- liste conversations (partner IDs calcules en DB)
- tri latest/oldest/unread
- recherche partenaire
- compte unread

#### g) Conversation `/pages/conversation/{id}`
Controller: `ConversationController`

Logique:
- afficher conversation bilaterale
- envoi message
- mark as read

#### h) Notifications `/pages/notifications`
Controller: `NotificationsController`

Logique:
- filtre type/unread/search/sort
- mark all read

### 7.6 Regles metier avancees dans ton module
- post doit contenir texte ou image
- suppression post: auteur ou admin seulement
- report unique OPEN par user/cible
- friend request unique/pending controlee
- messaging cache suppression par sender/receiver
- token reset stocke en hash (pas en clair)
- login bloque si user inactive ou email non verifie

---
## 8) MODULE JEUX + CATEGORIES (collegue 1)

### 8.1 Entites
- `Category`
- `Game`

### 8.2 Pages Front
- `/pages/games` -> `GamesController`
- `/pages/game-detail/{id}` -> `GameDetailController`

#### Logique `games`
- recherche `q`
- filtre `category`, `publisher`, `active`
- tri `name/latest/publisher/category/popular`
- pagination
- tout en DB via `GameRepository::searchCatalog`
- compte tournois actifs/total par jeu

#### Logique `game-detail`
- details jeu
- onglets tournois (open/ongoing/finished)
- filtres tournois (status/format/sort)
- stats derives (participants/progress)

### 8.3 Pages Admin
- `/admin/categories` -> `CategoriesController` (CRUD + export)
- `/admin/games` -> `GamesController` (CRUD + export)
- `/admin/game-form`, `/admin/category-form` (legacy/page support)

#### Logique admin
- create/update/delete depuis meme ecran liste
- tri, filtre, recherche cote serveur
- export PDF/Excel
- upload image de jeu gere (cover)

---

## 9) MODULE TOURNOIS + MATCHS (collegue 2)

### 9.1 Entites
- `TournamentRequest`
- `Tournament`
- `TournamentTeam`
- `TournamentMatch`
- `MatchTeam`

### 9.2 Pages Front publiques
- `/pages/tournaments` -> `TournamentsController`
- `/pages/tournament-detail/{id}` -> `TournamentDetailController`
- `/pages/matches` -> `MatchesController`
- `/pages/match-detail/{id}` -> `MatchDetailController`

#### `tournaments`
- filtres: jeu, categorie, statut, format, registration_mode, dates, prize range
- tri: latest/prize/progress
- pagination
- compte inscriptions/matchs/progress
- export PDF/Excel

#### `tournament-detail`
- affiche participants, matchs, scoreboard
- bouton participer:
  - user doit etre connecte
  - doit etre capitaine d'au moins une equipe
  - choisit l'equipe si plusieurs
  - controle mode inscription OPEN/APPROVAL
  - controle deadline + max teams + statut tournoi

#### `matches`
- filtres: q, tournoi, jeu, status, dates, nom equipe
- tri: upcoming/latest
- pagination
- recherche equipe via subquery DB (pas front-only)

#### `match-detail`
- details match + equipes participantes + gagnants

### 9.3 Pages Organizer (FO role organizer)
- `organizer-requests`, `organizer-request-create`, `organizer-request-detail`
- `organizer-tournaments`, `organizer-tournament-detail`
- `organizer-registrations`
- `organizer-matches`, `organizer-match-create`, `organizer-match-edit`

#### Points forts
- formulaire request/create tres complet (meme champs admin)
- upload photo tournoi (`photoFile` -> `photoPath`)
- edition tournoi organiseur avec pre-remplissage
- creation/edition match avec n equipes (>=2), pas limite a 2
- participantTeams recharge selon tournoi selectionne via endpoint JSON:
  - `/lookup/tournament-participants`

### 9.4 Pages Admin Tournois/Matchs
- `/admin/tournament-requests` + detail/review/export
- `/admin/tournaments` + create/edit/detail/delete/export
- `/admin/matches` + CRUD complet

#### Regles avancees
- review demande organizer:
  - ACCEPTED => creation automatique Tournament si absent
  - REFUSED => statut refuse
  - email automatique a l'organisateur (accept/refuse)
- gestion match multi-equipes via table `match_teams`
- score + winners par equipe

---

## 10) MODULE EQUIPES + MEMBRES (collegue 3)

### 10.1 Entites
- `Team`
- `TeamMember`
- `TeamJoinRequest`
- `TeamInvite`

### 10.2 Pages Front publiques
- `/pages/teams` -> `TeamsController`
- `/pages/team-detail/{id}` -> `TeamDetailController`

#### `teams`
- recherche q
- filtre region, hasProducts, activeInTournaments
- tri latest/oldest/name/region/popular
- pagination
- stats membres/produits/tournois actifs

#### `team-detail`
- onglets tournaments/members/products
- filtres specifiques par onglet
- stats equipe
- logique join team:
  - invite a login si guest
  - bloque capitaine deja owner
  - bloque si deja membre
  - bloque si demande pending existe
  - cree TeamJoinRequest sinon

### 10.3 Pages joueur/capitaine
- joueur:
  - `/pages/my-teams`
  - `/pages/my-requests`
- capitaine:
  - `/pages/captain-team-manage` (creer/modifier team)
  - `/pages/captain-members`
  - `/pages/captain-requests`
  - `/pages/captain-invite`
  - `/pages/captain-team-tournaments` / `captain-tournaments`

#### reCAPTCHA (Google) sur invite capitaine
- controller: `CaptainInviteController::send`
- verification server-side vers `https://www.google.com/recaptcha/api/siteverify`
- champs `.env` utilises:
  - `GOOGLE_RECAPTCHA_SITE_KEY`
  - `GOOGLE_RECAPTCHA_SECRET_KEY`
- si captcha invalide => invitation refusee

---

## 11) MODULE SHOP (produits/panier/commandes) - collegue 4

### 11.1 Entites
- `Product`
- `ProductImage`
- `Cart`
- `CartItem`
- `Order`

### 11.2 Pages Front
- `/pages/shop` -> `ShopController`
- `/pages/product-detail/{id}` -> `ProductDetailController`
- `/pages/cart` -> `CartController`
- `/pages/checkout` -> `CheckoutController`
- `/pages/orders` -> `OrdersController`
- `/pages/order-detail/{id}` -> `OrderDetailController`

#### `shop`
- recherche q
- filtre team, min/max price, stock, active
- tri latest/oldest/name/price/stock
- pagination

#### `product-detail`
- detail produit + images + related products
- quantite deja dans panier

#### `cart`
- add/update/remove item
- filtres sur lignes de panier
- pagination
- controle panier editable (status OPEN)

#### `checkout`
- transforme panier en commande
- genere order number
- verrouille panier (`ORDERED`, `locked_at`)
- payment status/method selon choix

#### `orders` et `order-detail`
- historique user avec filtres + tri
- detail lignes commande

### 11.3 Service central panier
Fichier: `src/Service/Shop/CartManager.php`

Role:
- getOrCreateCart
- addProduct
- updateQuantity
- removeProduct
- buildSummary
- bloque edition si panier non OPEN

### 11.4 Back Office commerce
- `/admin/products` (CRUD + export)
- `/admin/carts` (CRUD + export)
- `/admin/orders` (CRUD + export)

---

## 12) Back Office Admin global

### 12.1 Layout commun
- `templates/admin/base_admin.html.twig`
- `templates/admin/Partials/navbar.html.twig` (search only)
- `templates/admin/Partials/sidebar.html.twig`
- `templates/admin/Partials/footer.html.twig`

### 12.2 Dashboard admin
Controller: `src/Controller/Admin/DashboardController.php`

Logique:
- KPIs users/orders/reports/requests/tournaments
- filtres globaux (period/status/search)
- queries SQL via DBAL
- charts (orders by day, order statuses, registrations by tournament)
- listes recentes

### 12.3 CRUD Admin socials/users
- users: `UsersController`, `UserCreateController`, `UserEditController`, `UserDetailController`
- posts: `PostsController`, `PostDetailController`
- comments: `CommentsController`
- reports: `ReportsController`, `ReportDetailController`
- messages: `MessagesController`

Pattern commun:
- filtres + tri + recherche server-side
- create/update/delete avec CSRF
- export PDF/Excel

### 12.4 Exports PDF/Excel
Service: `src/Service/Admin/TableExportService.php`

- `exportPdf(...)` via Dompdf
- `exportExcel(...)` via PhpSpreadsheet
- colonnes et lignes construites par controller

---
## 13) Recherche / filtre / tri dynamiques (exigence prof)

Comment c'est fait proprement:
1. L'utilisateur tape dans un input filtre.
2. JS (`wireAutoSubmitForms`) soumet automatiquement le formulaire GET (debounce ~380ms).
3. Le controller recoit query params.
4. Le repository fait la requete SQL Doctrine avec WHERE/ORDER BY.
5. Le controller render la page avec resultat filtre.

Donc:
- dynamique pour UX (sans bouton)
- mais moteur de recherche = backend DB (PHP/Doctrine), pas simple filtre JS local

---

## 14) Pages detectees par module (resume exploitable oral)

### 14.1 Module User/Social (FO)
- `front_login`, `front_register`, `front_forgot_password`, `front_reset_password`, `front_verify_email`, `app_logout`
- `front_profile`, `front_profile_edit`, `front_password_change`, `front_player_profile`, `front_players`
- `front_feed`, `front_feed_chunk`, `front_feed_post_create`, `front_feed_post_like`, `front_feed_post_comment`, `front_feed_post_report`, `front_post_delete`
- `front_friends` + accept/refuse/cancel
- `front_messages`, `front_conversation`
- `front_notifications` + mark all read
- `front_dashboard`

### 14.2 Module Jeux
- `front_games`, `front_game_detail`
- Admin: `admin_categories`, `admin_games` (+ export/delete)

### 14.3 Module Tournois/Matchs
- `front_tournaments`, `front_tournament_detail`, `front_tournament_participate`
- `front_matches`, `front_match_detail`
- organizer routes (`front_organizer_*`)
- shared lookup: `lookup_tournament_participants`
- Admin: `admin_tournament_requests`, `admin_tournaments`, `admin_matches`

### 14.4 Module Equipes
- `front_teams`, `front_team_detail`, `front_team_detail_join`
- `front_my_teams`, `front_my_requests`
- `front_captain_*`
- Admin: `admin_teams` (+ team related pages)

### 14.5 Module Shop
- `front_shop`, `front_product_detail`
- `front_cart`, `front_checkout`, `front_orders`, `front_order_detail`
- Admin: `admin_products`, `admin_carts`, `admin_orders`

---

## 15) Questions oral probables + reponses simples

### Q1: "C'est quoi Symfony?"
R: Framework PHP qui organise le projet en MVC, securise, structure les routes, formulaires, templates, auth, etc.

### Q2: "Comment vous protegeez les pages admin?"
R: `security.yaml` + `access_control` sur prefix `/admin` avec `ROLE_ADMIN`.

### Q3: "Ou est le hash du mot de passe?"
R: en base dans `users.password_hash`. Jamais en clair. Hash fait par `UserPasswordHasherInterface`.

### Q4: "Comment vous gerez email verify?"
R: lien signe (`EmailVerifier` + VerifyEmailBundle), puis `UserChecker` bloque login tant que non verifie.

### Q5: "Recherche dynamique, c'est front ou back?"
R: dynamique en UX via JS auto-submit, mais requete faite par Controller/Repository vers MySQL.

### Q6: "Capitaine c'est un role global ou par equipe?"
R: dans ce projet il existe `CAPTAIN` en role DB + logique equipe via Team relation et TeamVoter.

### Q7: "Comment eviter les erreurs de saisie?"
R: contraintes `Assert` dans entites + contraintes FormType + `isValid()` + `form_errors` Twig + `novalidate`.

### Q8: "Comment vous gerez uploads image?"
R: `UploadedFile`, stockage `public/uploads/...`, puis path sauvegarde en DB (Image ou photoPath).

### Q9: "Comment proteger contre CSRF?"
R: token CSRF dans tous formulaires sensibles (`isCsrfTokenValid(...)`).

### Q10: "Comment vous exportez PDF/Excel?"
R: service `TableExportService` avec Dompdf et PhpSpreadsheet.

---

## 16) Emplacements des fichiers par module

### 16.1 Module User/Social
Controllers:
- `src/Controller/Front/Page/LoginController.php`
- `src/Controller/Front/Page/RegisterController.php`
- `src/Controller/Front/Page/ForgotPasswordController.php`
- `src/Controller/Front/Page/ResetPasswordController.php`
- `src/Controller/Front/Page/ProfileController.php`
- `src/Controller/Front/Page/ProfileEditController.php`
- `src/Controller/Front/Page/PasswordChangeController.php`
- `src/Controller/Front/Page/PlayersController.php`
- `src/Controller/Front/Page/PlayerProfileController.php`
- `src/Controller/Front/Page/FeedController.php`
- `src/Controller/Front/Page/FriendsController.php`
- `src/Controller/Front/Page/MessagesController.php`
- `src/Controller/Front/Page/ConversationController.php`
- `src/Controller/Front/Page/NotificationsController.php`

Entities:
- `src/Entity/User.php`
- `src/Entity/FriendRequest.php`
- `src/Entity/Friendship.php`
- `src/Entity/Post.php`
- `src/Entity/PostImage.php`
- `src/Entity/PostLike.php`
- `src/Entity/Comment.php`
- `src/Entity/Report.php`
- `src/Entity/Message.php`
- `src/Entity/Notification.php`

Repositories:
- `src/Repository/UserRepository.php`
- `src/Repository/FriendRequestRepository.php`
- `src/Repository/FriendshipRepository.php`
- `src/Repository/PostRepository.php`
- `src/Repository/PostImageRepository.php`
- `src/Repository/PostLikeRepository.php`
- `src/Repository/CommentRepository.php`
- `src/Repository/ReportRepository.php`
- `src/Repository/MessageRepository.php`
- `src/Repository/NotificationRepository.php`

Forms:
- `src/Form/RegistrationFormType.php`
- `src/Form/ForgotPasswordRequestType.php`
- `src/Form/ResetPasswordType.php`
- `src/Form/ProfileEditType.php`
- `src/Form/PasswordChangeType.php`
- `src/Form/UserType.php`

Templates:
- `templates/front/pages/login.html.twig`
- `templates/front/pages/register.html.twig`
- `templates/front/pages/forgot-password.html.twig`
- `templates/front/pages/reset-password.html.twig`
- `templates/front/pages/profile.html.twig`
- `templates/front/pages/profile-edit.html.twig`
- `templates/front/pages/password-change.html.twig`
- `templates/front/pages/feed.html.twig`
- `templates/front/pages/friends.html.twig`
- `templates/front/pages/messages.html.twig`
- `templates/front/pages/conversation.html.twig`
- `templates/front/pages/notifications.html.twig`
- `templates/front/pages/players.html.twig`

Services:
- `src/Service/Profile/ProfilePageDataProvider.php`
- `src/Service/Post/FeedPostAssembler.php`
- `src/Service/Post/PostImageUploader.php`

Security:
- `src/Security/LoginFormAuthenticator.php`
- `src/Security/UserChecker.php`
- `src/Security/EmailVerifier.php`
- `src/Controller/Security/VerifyEmailController.php`
- `config/packages/security.yaml`

### 16.2 Module Jeux
Controllers:
- `src/Controller/Front/Page/GamesController.php`
- `src/Controller/Front/Page/GameDetailController.php`
- `src/Controller/Admin/Page/CategoriesController.php`
- `src/Controller/Admin/Page/GamesController.php`

Entities/Repositories/Forms:
- `src/Entity/Category.php`, `src/Entity/Game.php`
- `src/Repository/CategoryRepository.php`, `src/Repository/GameRepository.php`
- `src/Form/CategoryType.php`, `src/Form/GameType.php`

Templates:
- `templates/front/pages/games.html.twig`
- `templates/front/pages/game-detail.html.twig`
- `templates/admin/pages/categories.html.twig`
- `templates/admin/pages/games.html.twig`

### 16.3 Module Tournois/Matchs
Controllers:
- `src/Controller/Front/Page/TournamentsController.php`
- `src/Controller/Front/Page/TournamentDetailController.php`
- `src/Controller/Front/Page/MatchesController.php`
- `src/Controller/Front/Page/MatchDetailController.php`
- `src/Controller/Front/Page/OrganizerRequestCreateController.php`
- `src/Controller/Front/Page/OrganizerRequestsController.php`
- `src/Controller/Front/Page/OrganizerRequestDetailController.php`
- `src/Controller/Front/Page/OrganizerTournamentsController.php`
- `src/Controller/Front/Page/OrganizerTournamentDetailController.php`
- `src/Controller/Front/Page/OrganizerRegistrationsController.php`
- `src/Controller/Front/Page/OrganizerMatchesController.php`
- `src/Controller/Front/Page/OrganizerMatchCreateController.php`
- `src/Controller/Front/Page/OrganizerMatchEditController.php`
- `src/Controller/Shared/TournamentParticipantTeamsLookupController.php`
- `src/Controller/Admin/Page/TournamentRequestsController.php`
- `src/Controller/Admin/Page/TournamentsController.php`
- `src/Controller/Admin/Page/TournamentFormController.php`
- `src/Controller/Admin/Page/MatchesController.php`

Entities/Repositories/Forms:
- `src/Entity/TournamentRequest.php`
- `src/Entity/Tournament.php`
- `src/Entity/TournamentTeam.php`
- `src/Entity/TournamentMatch.php`
- `src/Entity/MatchTeam.php`
- `src/Repository/TournamentRequestRepository.php`
- `src/Repository/TournamentRepository.php`
- `src/Repository/TournamentTeamRepository.php`
- `src/Repository/TournamentMatchRepository.php`
- `src/Repository/MatchTeamRepository.php`
- `src/Form/TournamentRequestType.php`
- `src/Form/TournamentType.php`
- `src/Form/TournamentTeamType.php`
- `src/Form/TournamentMatchType.php`
- `src/Form/MatchTeamType.php`

Templates (principaux):
- `templates/front/pages/tournaments.html.twig`
- `templates/front/pages/tournament-detail.html.twig`
- `templates/front/pages/matches.html.twig`
- `templates/front/pages/match-detail.html.twig`
- `templates/front/pages/organizer-*.html.twig`
- `templates/admin/pages/tournament-requests.html.twig`
- `templates/admin/pages/tournaments.html.twig`
- `templates/admin/pages/tournament-form.html.twig`
- `templates/admin/pages/matches.html.twig`

### 16.4 Module Equipes
Controllers:
- `src/Controller/Front/Page/TeamsController.php`
- `src/Controller/Front/Page/TeamDetailController.php`
- `src/Controller/Front/Page/MyTeamsController.php`
- `src/Controller/Front/Page/MyRequestsController.php`
- `src/Controller/Front/Page/CaptainTeamManageController.php`
- `src/Controller/Front/Page/CaptainMembersController.php`
- `src/Controller/Front/Page/CaptainRequestsController.php`
- `src/Controller/Front/Page/CaptainInviteController.php`
- `src/Controller/Front/Page/CaptainTournamentsController.php`
- `src/Controller/Front/Page/CaptainTeamTournamentsController.php`
- `src/Controller/Admin/Page/TeamsController.php`

Entities/Repositories/Forms:
- `src/Entity/Team.php`
- `src/Entity/TeamMember.php`
- `src/Entity/TeamJoinRequest.php`
- `src/Entity/TeamInvite.php`
- `src/Repository/TeamRepository.php`
- `src/Repository/TeamMemberRepository.php`
- `src/Repository/TeamJoinRequestRepository.php`
- `src/Repository/TeamInviteRepository.php`
- `src/Form/TeamType.php`
- `src/Form/TeamMemberType.php`
- `src/Form/TeamJoinRequestType.php`
- `src/Form/TeamInviteType.php`

Services/Security:
- `src/Service/Captain/CaptainTeamContextProvider.php`
- `src/Security/CaptainAccess.php`
- `src/Security/Voter/TeamVoter.php`

Templates:
- `templates/front/pages/teams.html.twig`
- `templates/front/pages/team-detail.html.twig`
- `templates/front/pages/my-teams.html.twig`
- `templates/front/pages/my-requests.html.twig`
- `templates/front/pages/captain-*.html.twig`
- `templates/admin/pages/teams.html.twig`

### 16.5 Module Shop (produits/panier/commande)
Controllers:
- `src/Controller/Front/Page/ShopController.php`
- `src/Controller/Front/Page/ProductDetailController.php`
- `src/Controller/Front/Page/CartController.php`
- `src/Controller/Front/Page/CheckoutController.php`
- `src/Controller/Front/Page/OrdersController.php`
- `src/Controller/Front/Page/OrderDetailController.php`
- `src/Controller/Front/Page/CaptainProductsController.php`
- `src/Controller/Front/Page/CaptainProductCreateController.php`
- `src/Controller/Front/Page/CaptainProductEditController.php`
- `src/Controller/Front/Page/CaptainOrdersController.php`
- `src/Controller/Admin/Page/ProductsController.php`
- `src/Controller/Admin/Page/CartsController.php`
- `src/Controller/Admin/Page/OrdersController.php`

Entities/Repositories/Forms/Service:
- `src/Entity/Product.php`, `src/Entity/ProductImage.php`
- `src/Entity/Cart.php`, `src/Entity/CartItem.php`
- `src/Entity/Order.php`
- `src/Repository/ProductRepository.php`
- `src/Repository/ProductImageRepository.php`
- `src/Repository/CartRepository.php`
- `src/Repository/CartItemRepository.php`
- `src/Repository/OrderRepository.php`
- `src/Form/ProductType.php`, `src/Form/CartType.php`, `src/Form/CartItemType.php`, `src/Form/OrderType.php`
- `src/Service/Shop/CartManager.php`

Templates:
- `templates/front/pages/shop.html.twig`
- `templates/front/pages/product-detail.html.twig`
- `templates/front/pages/cart.html.twig`
- `templates/front/pages/checkout.html.twig`
- `templates/front/pages/orders.html.twig`
- `templates/front/pages/order-detail.html.twig`
- `templates/admin/pages/products.html.twig`
- `templates/admin/pages/carts.html.twig`
- `templates/admin/pages/orders.html.twig`

### 16.6 Fichiers communs FO/BO
- `templates/base.html.twig`
- `templates/front/partials/_hero_full.html.twig`
- `templates/front/partials/_top_nav.html.twig`
- `templates/front/partials/_footer.html.twig`
- `templates/front/partials/_account_sidebar.html.twig`
- `templates/admin/base_admin.html.twig`
- `templates/admin/Partials/sidebar.html.twig`
- `templates/admin/Partials/navbar.html.twig`
- `templates/admin/Partials/footer.html.twig`
- `public/assets/template_fo/js/app.js`
- `public/assets/template_bo/js/app.js`

---

## 17) Conclusion courte (phrase orale)
Notre projet est un Symfony MVC complet avec separation claire des modules. Les recherches/filtres/tris sont traites cote serveur via Doctrine, la securite est geree par `security.yaml` + authenticator + roles + CSRF, les formulaires sont valides cote backend avec `Assert`/`FormType`, et chaque module expose des pages FO/BO avec logique metier et CRUD.

---

## 18) Explication du code par module (lecture technique)

Cette section explique "comment le code tourne" dans chaque module.
Format constant pour chaque module:
- Entree: route + controller
- Traitement: validation + logique metier
- Donnees: repository + entites
- Sortie: rendu Twig ou redirection

### 18.1 Module User + Social (ton module)

#### A) Authentification et comptes

1) Inscription (`src/Controller/Front/Page/RegisterController.php`)
- Route: `/pages/register`
- Le controller cree un objet `User` puis un `RegistrationFormType`.
- `handleRequest($request)` remplit l'objet avec les donnees formulaire.
- Condition cle: `if ($form->isSubmitted() && $form->isValid())`.
- Le password est hashe avec `UserPasswordHasherInterface`.
- Le user est sauvegarde via `EntityManager->persist()` puis `flush()`.
- Ensuite, appel a `EmailVerifier->sendEmailConfirmation(...)`.
- Redirection vers login.

2) Login (`src/Security/LoginFormAuthenticator.php`)
- `authenticate(Request $request)` lit `_username`, `_password`, `_csrf_token`.
- Symfony construit un `Passport` (UserBadge + PasswordCredentials + CSRF badge).
- Si ok: `onAuthenticationSuccess()` redirige vers target_path ou `front_home`.

3) Verification email (`src/Controller/Security/VerifyEmailController.php`)
- Route: `/verify/email`
- Lit l'id user dans query.
- `EmailVerifier->handleEmailConfirmation(...)` valide la signature.
- Met `emailVerified = true` puis `flush()`.

4) Mot de passe oublie (`ForgotPasswordController` + `ResetPasswordController`)
- Forgot:
  - verifie email existe via `UserRepository`
  - genere token random
  - stocke `hash(token)` + expiration en base
  - envoie email reset
- Reset:
  - lit `token` depuis URL/form
  - verifie hash + date via `findOneByValidResetPasswordTokenHash(...)`
  - hash nouveau password
  - efface token/expiration

#### B) Profil utilisateur

1) Page profil (`src/Controller/Front/Page/ProfileController.php`)
- Route: `/pages/profile`
- Verifie que user est connecte.
- Utilise `ProfilePageDataProvider->build(...)` pour preparer toutes les donnees d'onglets.
- Rend `templates/front/pages/profile.html.twig`.

2) Creation post depuis profil (`createPost`)
- CSRF check.
- Regle metier: texte OU image obligatoire.
- Cree entite `Post`.
- Upload images via `PostImageUploader->createPostImages(...)`.
- Persiste `Post`, `Image`, `PostImage`, puis `flush()`.

3) Like / Comment / Report
- Like: cherche un like existant (`PostLikeRepository`).
  - s'il existe: remove
  - sinon: create `PostLike`
- Comment: create entite `Comment` (contenu non vide).
- Report: verifie qu'un report OPEN n'existe pas deja pour ce user et ce post.

4) Edition profil (`src/Controller/Front/Page/ProfileEditController.php`)
- Form `ProfileEditType`.
- Upload photo via `UploadedFile`.
- Cree entite `Image` (path, mime, size, width/height) puis lie au `User`.

5) Changement password (`PasswordChangeController`)
- Verifie mot de passe actuel.
- Interdit de remettre le meme password.
- Hash du nouveau password + `flush()`.

#### C) Fil social, amis, messages, notifications

1) Feed (`src/Controller/Front/Page/FeedController.php`)
- `index()` charge les premiers posts via `FeedPostAssembler`.
- `chunk()` charge la suite en JSON pour infinite scroll.
- `createPost`, `toggleLike`, `addComment`, `report`, `deletePost` gerent les actions.
- Suppression post: seulement auteur du post ou admin.

2) Amis (`FriendsController`)
- `index()` recupere:
  - amis (`FriendshipRepository->findFriendsByUser`)
  - demandes recues/envoyees (`FriendRequestRepository`)
- Actions:
  - accept => cree `Friendship` + passe request a `ACCEPTED`
  - refuse => status `REFUSED`
  - cancel => status `CANCELLED`

3) Messages (`MessagesController` + `ConversationController`)
- `MessagesController::index()`:
  - recupere IDs partenaires via `MessageRepository->findConversationPartnerIds(...)`
  - charge apercus + unread count
- `ConversationController::index()`:
  - GET: charge conversation
  - POST: envoie un nouveau message
  - marque les messages recus comme lus

4) Notifications (`NotificationsController`)
- Filtre par type/unread/query/sort via `NotificationRepository->findForUserWithFilters(...)`.
- `markAllRead()` met toutes les notifications en lu.

#### D) Validation et securite dans ce module
- Contraintes `Assert` dans `User`, `Post`, `Comment`, `Message`, `Report`, etc.
- Tous les POST sensibles utilisent CSRF.
- `security.yaml` + `UserChecker` imposent compte actif + email verifie.
- Les recherches/tri/filtres sont en DB via repositories, pas en JS local.

---

### 18.2 Module Jeux + Categories

#### A) Front jeux (`GamesController`)
- Route: `/pages/games`
- Lit filtres GET: `q`, `category`, `publisher`, `active`, `sort`.
- Appelle `GameRepository->searchCatalog(...)`.
- Calcule stats de popularite par jeu via `TournamentRepository->countByGameIds(...)`.
- Applique pagination puis rend `games.html.twig`.

#### B) Detail jeu (`GameDetailController`)
- Route: `/pages/game-detail/{id}`
- Recupere le jeu avec relations.
- Lit filtres de tournois (`status`, `format`, `sort`, `tq`).
- Appelle `TournamentRepository->searchCatalog(...)` limite au jeu.
- Groupe les tournois par statut pour onglets UI.
- Calcule progression via `TournamentMatchRepository`.

#### C) Admin jeux/categories
- `CategoriesController` et `GamesController`:
  - list + create/update (meme page)
  - delete securise par CSRF
  - recherche/tri/filtre cote serveur
  - export PDF/Excel
- Pour les jeux: gestion image cover (upload + liaison).

---

### 18.3 Module Tournois + Matchs

#### A) Catalogue tournois front (`TournamentsController`)
- Route: `/pages/tournaments`
- Lit un grand set de filtres:
  - query, game, category, status, format, registration_mode
  - date_from/date_to
  - prize_min/prize_max
  - sort
- Appelle `TournamentRepository->searchCatalog(...)`.
- Charge compteurs participants/matchs via `TournamentTeamRepository` et `TournamentMatchRepository`.
- Pagination puis rendu.
- Export PDF/Excel possible.

#### B) Detail tournoi + participation (`TournamentDetailController`)
- `index()`:
  - charge participants, matchs, scoreboard
  - detecte equipes du capitaine connecte
  - calcule si inscription ouverte (`isRegistrationOpen`)
- `participate()`:
  - exige login + CSRF
  - verifie user capitaine d'au moins une team
  - selection team
  - verifie deja inscrit/pending
  - verifie statut tournoi + max teams + deadline
  - cree ou met a jour `TournamentTeam` (`PENDING` ou `ACCEPTED` selon mode)

#### C) Matchs front (`MatchesController` + `MatchDetailController`)
- `MatchesController`:
  - filtres: tournoi, jeu, status, date, nom equipe, sort
  - recherche en DB via `TournamentMatchRepository->searchMatches(...)`
  - charge equipes de chaque match via `MatchTeamRepository`
- `MatchDetailController`:
  - charge match + contexte tournoi/jeu
  - recupere equipes participantes et winners

#### D) Espace Organizer
- `OrganizerRequestCreateController`:
  - formulaire complet `TournamentRequestType`
  - lock organizer courant
  - upload photo tournoi
  - cree demande `PENDING`
- `OrganizerTournamentDetailController`:
  - charge tournoi de l'organisateur
  - formulaire `TournamentType` pre-rempli
  - update + upload photo
- `OrganizerMatchCreateController` / `OrganizerMatchEditController`:
  - formulaire `TournamentMatchType`
  - selection participantTeams (>=2)
  - coherence avec equipes ACCEPTED du tournoi
  - creation/mise a jour de `MatchTeam` (score/winner)

#### E) Endpoint de rechargement dynamique equipes participantes
- `src/Controller/Shared/TournamentParticipantTeamsLookupController.php`
- Route: `/lookup/tournament-participants`
- Retour JSON des equipes ACCEPTED pour un tournoi.
- Utilise pour recharger la liste des teams quand tournoi change.

---

### 18.4 Module Equipes + Membres

#### A) Liste equipes (`TeamsController`)
- Route: `/pages/teams`
- Filtres: q, region, products, active_tournaments, sort.
- Requete DB via `TeamRepository->searchCatalog(...)`.
- Calcule compteurs:
  - membres actifs (`TeamMemberRepository`)
  - produits (`ProductRepository`)
  - participations tournois (`TournamentTeamRepository`)
- Pagination + rendu.

#### B) Detail equipe (`TeamDetailController`)
- Route: `/pages/team-detail/{id}`
- Charge l'equipe + donnees onglets (tournois, membres, produits).
- Chaque onglet a ses filtres propres cote serveur.
- Calcule `join_state` pour afficher le bon bouton/message:
  - guest, captain, member, pending, can_join.

Action `join()`:
- login obligatoire + CSRF
- interdit auto-join si deja capitaine de la team
- interdit si deja membre actif
- interdit si demande pending existe
- sinon cree `TeamJoinRequest` en `PENDING`

#### C) Espace capitaine

1) Contexte team capitaine
- Service: `CaptainTeamContextProvider`
- Donne la team active et la liste des teams du capitaine.

2) Gestion invitations (`CaptainInviteController`)
- `index()`:
  - charge team active
  - recherche joueurs invitables (exclut deja membres + invites pending)
- `send()`:
  - CSRF
  - verification Google reCAPTCHA server-side
  - verifie team autorisee (capitaine courant)
  - verifie utilisateur invitabl
  - cree `TeamInvite` status `PENDING`

3) Droits captain par equipe
- `TeamVoter` autorise actions team si:
  - user admin
  - ou user == captain de cette team

---

### 18.5 Module Shop (Produits, Panier, Commandes)

#### A) Catalogue shop (`ShopController`)
- Route: `/pages/shop`
- Filtres: q, team, min/max price, stock, active, sort.
- Requete via `ProductRepository->searchForShop(...)`.
- Images primaires via `ProductImageRepository`.
- Compteur panier user courant via `CartManager`.

#### B) Detail produit (`ProductDetailController`)
- Charge produit actif.
- Charge images du produit + related products.
- Detecte quantite de ce produit deja dans le panier utilisateur.

#### C) Panier (`CartController`)
- `index()`:
  - charge panier user
  - construit resume via `CartManager->buildSummary(...)`
  - applique filtres/tri sur lignes
- `add()`:
  - CSRF + produit actif + stock > 0
  - `CartManager->getOrCreateCart(...)`
  - `CartManager->addProduct(...)`
- `updateQuantity()`:
  - CSRF + panier du user
  - borne quantite avec stock
  - `CartManager->updateQuantity(...)`
- `remove()`:
  - CSRF
  - `CartManager->removeProduct(...)`

#### D) Checkout (`CheckoutController`)
- Verifie user connecte.
- Verifie panier existe et non vide.
- Verifie absence de commande deja liee a ce panier.
- POST confirmation:
  - CSRF
  - cree `Order` (number, status, payment fields, total)
  - verrouille panier (`status=ORDERED`, `lockedAt`)
  - `flush()` puis redirection detail commande

#### E) Historique commandes (`OrdersController`, `OrderDetailController`)
- `OrdersController`:
  - filtres status/date/query/sort
  - DB via `OrderRepository->findByUserWithFilters(...)`
  - pagination + resume
- `OrderDetailController`:
  - charge commande user
  - reconstruit lignes depuis `CartItem`
  - calcule subtotal/shipping/total

#### F) Service central panier (`CartManager`)
- point unique de logique panier.
- regle metier critique: panier editable uniquement si status `OPEN`.
- evite duplication de logique dans plusieurs controllers.

---

### 18.6 Transversal Back Office Admin

#### A) Dashboard admin (`Admin/DashboardController`)
- lit filtres globaux (periode, status, query)
- execute requetes SQL aggregatees (DBAL)
- prepare:
  - KPI cards
  - courbes et distributions
  - listes recentes
- rend `templates/admin/index.html.twig`

#### B) CRUD admin standard (users/posts/comments/reports/messages/...)
Pattern commun dans vos controllers admin:
1. Lire filtres GET
2. Appeler `Repository->searchForAdmin(...)`
3. Afficher liste + compteurs
4. Pour create/update:
   - `createForm(...)`
   - `handleRequest(...)`
   - `isSubmitted && isValid`
   - persist/flush
5. Pour delete:
   - check CSRF
   - remove/flush
6. Pour export:
   - reutiliser filtres
   - transformer en `headers + rows`
   - `TableExportService->exportPdf/exportExcel`

#### C) Exports (`src/Service/Admin/TableExportService.php`)
- PDF:
  - construit HTML table
  - convertit via Dompdf
- Excel:
  - ecrit cellules via PhpSpreadsheet
  - stream `.xlsx`

---

### 18.7 Script oral court par module (30 secondes)

Tu peux dire exactement ceci (adapte par module):
1. "La route arrive dans un controller Symfony."
2. "Le controller lit les filtres depuis la requete."
3. "Il appelle un repository qui fait la recherche/tri/filtre en base MySQL."
4. "S'il y a un formulaire, on fait `handleRequest` puis `isSubmitted && isValid`."
5. "On applique les regles metier (droits, CSRF, statuts, etc.)."
6. "On sauvegarde avec Doctrine (`persist/flush`) si necessaire."
7. "On renvoie une vue Twig ou une redirection."

C'est la meme architecture partout, ce qui rend le projet coherent et maintenable.
