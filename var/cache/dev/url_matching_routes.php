<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/add-user-legacy' => [[['_route' => 'admin_add_user_legacy', '_controller' => 'App\\Controller\\Admin\\AddUserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard_page', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/carts' => [[['_route' => 'admin_carts', '_controller' => 'App\\Controller\\Admin\\Page\\CartsController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\Admin\\Page\\CategoriesController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category-form' => [[['_route' => 'admin_category_form', '_controller' => 'App\\Controller\\Admin\\Page\\CategoryFormController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/comments' => [[['_route' => 'admin_comments', '_controller' => 'App\\Controller\\Admin\\Page\\CommentsController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/game-detail' => [[['_route' => 'admin_game_detail', '_controller' => 'App\\Controller\\Admin\\Page\\GameDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/game-form' => [[['_route' => 'admin_game_form', '_controller' => 'App\\Controller\\Admin\\Page\\GameFormController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/games' => [[['_route' => 'admin_games', '_controller' => 'App\\Controller\\Admin\\Page\\GamesController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/images' => [[['_route' => 'admin_images', '_controller' => 'App\\Controller\\Admin\\Page\\ImagesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/match-detail' => [[['_route' => 'admin_match_detail_legacy', '_controller' => 'App\\Controller\\Admin\\Page\\MatchDetailController::legacy'], null, ['GET' => 0], null, false, false, null]],
        '/admin/match-teams' => [[['_route' => 'admin_match_teams', '_controller' => 'App\\Controller\\Admin\\Page\\MatchTeamsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/matches' => [[['_route' => 'admin_matches', '_controller' => 'App\\Controller\\Admin\\Page\\MatchesController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/messages' => [[['_route' => 'admin_messages', '_controller' => 'App\\Controller\\Admin\\Page\\MessagesController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/notifications' => [[['_route' => 'admin_notifications', '_controller' => 'App\\Controller\\Admin\\Page\\NotificationsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/order-detail' => [[['_route' => 'admin_order_detail', '_controller' => 'App\\Controller\\Admin\\Page\\OrderDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/orders' => [[['_route' => 'admin_orders', '_controller' => 'App\\Controller\\Admin\\Page\\OrdersController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/post-detail' => [[['_route' => 'admin_post_detail_legacy', '_controller' => 'App\\Controller\\Admin\\Page\\PostDetailController::legacy'], null, ['GET' => 0], null, false, false, null]],
        '/admin/posts' => [[['_route' => 'admin_posts', '_controller' => 'App\\Controller\\Admin\\Page\\PostsController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-detail' => [[['_route' => 'admin_product_detail', '_controller' => 'App\\Controller\\Admin\\Page\\ProductDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product-form' => [[['_route' => 'admin_product_form', '_controller' => 'App\\Controller\\Admin\\Page\\ProductFormController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/products' => [[['_route' => 'admin_products', '_controller' => 'App\\Controller\\Admin\\Page\\ProductsController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/report-detail' => [[['_route' => 'admin_report_detail_legacy', '_controller' => 'App\\Controller\\Admin\\Page\\ReportDetailController::legacy'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reports' => [[['_route' => 'admin_reports', '_controller' => 'App\\Controller\\Admin\\Page\\ReportsController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/team-detail' => [[['_route' => 'admin_team_detail', '_controller' => 'App\\Controller\\Admin\\Page\\TeamDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/team-invites' => [[['_route' => 'admin_team_invites', '_controller' => 'App\\Controller\\Admin\\Page\\TeamInvitesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/team-members' => [[['_route' => 'admin_team_members', '_controller' => 'App\\Controller\\Admin\\Page\\TeamMembersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/team-requests' => [[['_route' => 'admin_team_requests', '_controller' => 'App\\Controller\\Admin\\Page\\TeamRequestsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/teams' => [[['_route' => 'admin_teams', '_controller' => 'App\\Controller\\Admin\\Page\\TeamsController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tournament-detail' => [[['_route' => 'admin_tournament_detail_legacy', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tournament-form' => [[['_route' => 'admin_tournament_form', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentFormController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tournaments/new' => [[['_route' => 'admin_tournament_create', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentFormController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tournament-request-detail' => [[['_route' => 'admin_tournament_request_detail_legacy', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tournament-requests' => [[['_route' => 'admin_tournament_requests', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tournament-teams' => [[['_route' => 'admin_tournament_teams', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentTeamsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tournaments' => [[['_route' => 'admin_tournaments', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user-create' => [[['_route' => 'admin_user_create', '_controller' => 'App\\Controller\\Admin\\Page\\UserCreateController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/add-user' => [[['_route' => 'admin_add_user', '_controller' => 'App\\Controller\\Admin\\Page\\UserCreateController::legacyRoute'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user-detail' => [[['_route' => 'admin_user_detail_legacy', '_controller' => 'App\\Controller\\Admin\\Page\\UserDetailController::legacy'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user-edit' => [[['_route' => 'admin_user_edit_legacy', '_controller' => 'App\\Controller\\Admin\\Page\\UserEditController::legacy'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\Admin\\Page\\UsersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/location/reverse-geocode' => [[['_route' => 'api_location_reverse_geocode', '_controller' => 'App\\Controller\\Api\\LocationController::reverseGeocode'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'front_root', '_controller' => 'App\\Controller\\Front\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'front_home', '_controller' => 'App\\Controller\\Front\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/about' => [[['_route' => 'front_about', '_controller' => 'App\\Controller\\Front\\Page\\AboutController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/captain-invite' => [[['_route' => 'front_captain_invite', '_controller' => 'App\\Controller\\Front\\Page\\CaptainInviteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/captain-invite/send' => [[['_route' => 'front_captain_invite_send', '_controller' => 'App\\Controller\\Front\\Page\\CaptainInviteController::send'], null, ['POST' => 0], null, false, false, null]],
        '/pages/captain-members' => [[['_route' => 'front_captain_members', '_controller' => 'App\\Controller\\Front\\Page\\CaptainMembersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/captain-orders' => [[['_route' => 'front_captain_orders', '_controller' => 'App\\Controller\\Front\\Page\\CaptainOrdersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/captain-product-create' => [[['_route' => 'front_captain_product_create', '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductCreateController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pages/captain-products' => [[['_route' => 'front_captain_products', '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/captain-requests' => [[['_route' => 'front_captain_requests', '_controller' => 'App\\Controller\\Front\\Page\\CaptainRequestsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/captain-team-create' => [[['_route' => 'front_captain_team_create', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTeamCreateController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/captain-team-manage' => [[['_route' => 'front_captain_team_manage', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTeamManageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/captain-team-manage/ai-branding' => [[['_route' => 'front_captain_team_manage_ai_branding', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTeamManageController::generateBrandingSuggestion'], null, ['POST' => 0], null, false, false, null]],
        '/pages/captain-team-manage/create' => [[['_route' => 'front_captain_team_manage_create', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTeamManageController::create'], null, ['POST' => 0], null, false, false, null]],
        '/pages/captain-team-tournaments' => [[['_route' => 'front_captain_team_tournaments', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTeamTournamentsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/captain-tournaments' => [[['_route' => 'front_captain_tournaments', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTournamentsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/captain-tournaments/register' => [[['_route' => 'front_captain_tournaments_register', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTournamentsController::register'], null, ['POST' => 0], null, false, false, null]],
        '/pages/cart' => [[['_route' => 'front_cart', '_controller' => 'App\\Controller\\Front\\Page\\CartController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/checkout' => [[['_route' => 'front_checkout', '_controller' => 'App\\Controller\\Front\\Page\\CheckoutController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pages/contact' => [[['_route' => 'front_contact', '_controller' => 'App\\Controller\\Front\\Page\\ContactController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/dashboard' => [[['_route' => 'front_dashboard', '_controller' => 'App\\Controller\\Front\\Page\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/faq' => [[['_route' => 'front_faq', '_controller' => 'App\\Controller\\Front\\Page\\FaqController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/feed' => [[['_route' => 'front_feed', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/feed/chunk' => [[['_route' => 'front_feed_chunk', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::chunk'], null, ['GET' => 0], null, false, false, null]],
        '/pages/feed/posts/create' => [[['_route' => 'front_feed_post_create', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::createPost'], null, ['POST' => 0], null, false, false, null]],
        '/pages/feed-public' => [[['_route' => 'front_feed_public', '_controller' => 'App\\Controller\\Front\\Page\\FeedPublicController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/forgot-password' => [[['_route' => 'front_forgot_password', '_controller' => 'App\\Controller\\Front\\Page\\ForgotPasswordController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pages/friends' => [[['_route' => 'front_friends', '_controller' => 'App\\Controller\\Front\\Page\\FriendsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/games' => [[['_route' => 'front_games', '_controller' => 'App\\Controller\\Front\\Page\\GamesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/login' => [[['_route' => 'front_login', '_controller' => 'App\\Controller\\Front\\Page\\LoginController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Front\\Page\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/pages/matches' => [[['_route' => 'front_matches', '_controller' => 'App\\Controller\\Front\\Page\\MatchesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/messages' => [[['_route' => 'front_messages', '_controller' => 'App\\Controller\\Front\\Page\\MessagesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/my-requests' => [[['_route' => 'front_my_requests', '_controller' => 'App\\Controller\\Front\\Page\\MyRequestsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/my-teams' => [[['_route' => 'front_my_teams', '_controller' => 'App\\Controller\\Front\\Page\\MyTeamsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/notifications' => [[['_route' => 'front_notifications', '_controller' => 'App\\Controller\\Front\\Page\\NotificationsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/notifications/mark-all-read' => [[['_route' => 'front_notifications_mark_all_read', '_controller' => 'App\\Controller\\Front\\Page\\NotificationsController::markAllRead'], null, ['POST' => 0], null, false, false, null]],
        '/pages/orders' => [[['_route' => 'front_orders', '_controller' => 'App\\Controller\\Front\\Page\\OrdersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/organizer-match-create' => [[['_route' => 'front_organizer_match_create', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerMatchCreateController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pages/organizer-matches' => [[['_route' => 'front_organizer_matches', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerMatchesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/organizer-registrations' => [[['_route' => 'front_organizer_registrations', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRegistrationsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/organizer-request-create' => [[['_route' => 'front_organizer_request_create', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRequestCreateController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pages/organizer-requests' => [[['_route' => 'front_organizer_requests', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRequestsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/organizer-tournament-edit' => [[['_route' => 'front_organizer_tournament_edit', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerTournamentEditController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/organizer-tournaments' => [[['_route' => 'front_organizer_tournaments', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerTournamentsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/password-change' => [[['_route' => 'front_password_change', '_controller' => 'App\\Controller\\Front\\Page\\PasswordChangeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pages/players' => [[['_route' => 'front_players', '_controller' => 'App\\Controller\\Front\\Page\\PlayersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/post-create' => [[['_route' => 'front_post_create', '_controller' => 'App\\Controller\\Front\\Page\\PostCreateController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/post-detail' => [[['_route' => 'front_post_detail', '_controller' => 'App\\Controller\\Front\\Page\\PostDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/profile' => [[['_route' => 'front_profile', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/profile/posts/create' => [[['_route' => 'front_profile_post_create', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::createPost'], null, ['POST' => 0], null, false, false, null]],
        '/pages/profile-edit' => [[['_route' => 'front_profile_edit', '_controller' => 'App\\Controller\\Front\\Page\\ProfileEditController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pages/register' => [[['_route' => 'front_register', '_controller' => 'App\\Controller\\Front\\Page\\RegisterController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pages/reset-password' => [[['_route' => 'front_reset_password', '_controller' => 'App\\Controller\\Front\\Page\\ResetPasswordController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pages/search' => [[['_route' => 'front_search', '_controller' => 'App\\Controller\\Front\\Page\\SearchController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/shop' => [[['_route' => 'front_shop', '_controller' => 'App\\Controller\\Front\\Page\\ShopController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/teams' => [[['_route' => 'front_teams', '_controller' => 'App\\Controller\\Front\\Page\\TeamsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/teams-explore' => [[['_route' => 'front_teams_explore', '_controller' => 'App\\Controller\\Front\\Page\\TeamsExploreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pages/tournaments' => [[['_route' => 'front_tournaments', '_controller' => 'App\\Controller\\Front\\Page\\TournamentsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/security/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\Security\\LoginController::index'], null, ['GET' => 0], null, false, false, null]],
        '/verify/email' => [[['_route' => 'front_verify_email', '_controller' => 'App\\Controller\\Security\\VerifyEmailController::verifyUserEmail'], null, ['GET' => 0], null, false, false, null]],
        '/lookup/tournament-participants' => [[['_route' => 'lookup_tournament_participants', '_controller' => 'App\\Controller\\Shared\\TournamentParticipantTeamsLookupController'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:256)'
                    .'|([A-z0-9_-]*)/(.+)(*:282)'
                .')'
                .'|/admin/(?'
                    .'|c(?'
                        .'|a(?'
                            .'|rts/(?'
                                .'|(\\d+)/delete(*:328)'
                                .'|export/(pdf|excel)(*:354)'
                            .')'
                            .'|tegories/(?'
                                .'|(\\d+)/delete(*:387)'
                                .'|export/(pdf|excel)(*:413)'
                            .')'
                        .')'
                        .'|omments/(?'
                            .'|(\\d+)/delete(*:446)'
                            .'|export/(pdf|excel)(*:472)'
                        .')'
                    .')'
                    .'|games/(?'
                        .'|(\\d+)/delete(*:503)'
                        .'|export/(pdf|excel)(*:529)'
                    .')'
                    .'|m(?'
                        .'|atch(?'
                            .'|\\-detail/(\\d+)(*:563)'
                            .'|es/(\\d+)/delete(*:586)'
                        .')'
                        .'|essages/(?'
                            .'|(\\d+)/delete(*:618)'
                            .'|export/(pdf|excel)(*:644)'
                        .')'
                    .')'
                    .'|orders/(?'
                        .'|(\\d+)/delete(*:676)'
                        .'|export/(pdf|excel)(*:702)'
                    .')'
                    .'|p(?'
                        .'|ost(?'
                            .'|\\-detail/(\\d+)(*:735)'
                            .'|s/(?'
                                .'|(\\d+)/delete(*:760)'
                                .'|export/(pdf|excel)(*:786)'
                            .')'
                        .')'
                        .'|roducts/(?'
                            .'|(\\d+)/delete(*:819)'
                            .'|export/(pdf|excel)(*:845)'
                        .')'
                    .')'
                    .'|report(?'
                        .'|\\-detail/(\\d+)(*:878)'
                        .'|s/(?'
                            .'|(\\d+)/delete(*:903)'
                            .'|export/(pdf|excel)(*:929)'
                        .')'
                    .')'
                    .'|t(?'
                        .'|eams/(?'
                            .'|(\\d+)/delete(*:963)'
                            .'|export/(pdf|excel)(*:989)'
                        .')'
                        .'|ournament(?'
                            .'|s/(?'
                                .'|(\\d+)/detail(*:1027)'
                                .'|(\\d+)/edit(*:1046)'
                                .'|export/(pdf|excel)(*:1073)'
                                .'|(\\d+)/delete(*:1094)'
                            .')'
                            .'|\\-requests/(?'
                                .'|(\\d+)/detail(*:1130)'
                                .'|export/(pdf|excel)(*:1157)'
                                .'|(\\d+)/review(*:1178)'
                            .')'
                        .')'
                    .')'
                    .'|user(?'
                        .'|\\-(?'
                            .'|detail/(\\d+)(*:1214)'
                            .'|edit/(\\d+)(*:1233)'
                        .')'
                        .'|s/(?'
                            .'|(\\d+)/delete(*:1260)'
                            .'|export/(pdf|excel)(*:1287)'
                        .')'
                    .')'
                .')'
                .'|/pages/(?'
                    .'|c(?'
                        .'|a(?'
                            .'|ptain\\-(?'
                                .'|members/(?'
                                    .'|(\\d+)/(\\d+)/role(*:1354)'
                                    .'|(\\d+)/(\\d+)/remove(*:1381)'
                                    .'|(\\d+)/(\\d+)/reactivate(*:1412)'
                                .')'
                                .'|product(?'
                                    .'|\\-edit(?'
                                        .'|(?:/(\\d+))?(*:1452)'
                                        .'|/(\\d+)/images/(\\d+)/remove(*:1487)'
                                    .')'
                                    .'|s/(\\d+)/delete(*:1511)'
                                .')'
                                .'|requests/(\\d+)/respond(*:1543)'
                                .'|t(?'
                                    .'|eam\\-manage/(\\d+)/update(*:1580)'
                                    .'|ournaments/(?'
                                        .'|(\\d+)/cancel(*:1615)'
                                        .'|(\\d+)/checkin(*:1637)'
                                    .')'
                                .')'
                            .')'
                            .'|rt/(?'
                                .'|add/(\\d+)(*:1664)'
                                .'|items/(?'
                                    .'|(\\d+)/quantity(*:1696)'
                                    .'|(\\d+)/remove(*:1717)'
                                .')'
                            .')'
                        .')'
                        .'|onversation(?:/(\\d+))?(*:1751)'
                    .')'
                    .'|f(?'
                        .'|eed/posts/(?'
                            .'|(\\d+)/like(*:1788)'
                            .'|(\\d+)/comment(*:1810)'
                            .'|(\\d+)/report(*:1831)'
                        .')'
                        .'|riends/requests/(?'
                            .'|(\\d+)/accept(*:1872)'
                            .'|(\\d+)/refuse(*:1893)'
                            .'|(\\d+)/cancel(*:1914)'
                        .')'
                    .')'
                    .'|p(?'
                        .'|osts/(\\d+)/delete(*:1946)'
                        .'|layer\\-profile(?:/(\\d+))?(*:1980)'
                        .'|ro(?'
                            .'|duct\\-detail(?:/(\\d+))?(*:2017)'
                            .'|file/(?'
                                .'|posts/(?'
                                    .'|(\\d+)/like(*:2053)'
                                    .'|(\\d+)/comment(*:2075)'
                                    .'|(\\d+)/report(*:2096)'
                                .')'
                                .'|(\\d+)/add\\-friend(*:2123)'
                            .')'
                        .')'
                    .')'
                    .'|game\\-detail(?:/(\\d+))?(*:2158)'
                    .'|m(?'
                        .'|atch\\-detail(?:/(\\d+))?(*:2194)'
                        .'|y\\-(?'
                            .'|requests/(\\d+)/cancel(*:2230)'
                            .'|teams/(?'
                                .'|invites/(\\d+)/respond(*:2269)'
                                .'|(\\d+)/leave(*:2289)'
                            .')'
                        .')'
                    .')'
                    .'|or(?'
                        .'|der\\-detail(?:/(\\d+))?(*:2328)'
                        .'|ganizer\\-(?'
                            .'|match\\-edit/(\\d+)(*:2366)'
                            .'|re(?'
                                .'|gistrations/(\\d+)/(\\d+)/status(*:2410)'
                                .'|quest(?'
                                    .'|\\-detail/(\\d+)(*:2441)'
                                    .'|s/export/(pdf|excel)(*:2470)'
                                .')'
                            .')'
                            .'|tournament\\-detail/(\\d+)(*:2505)'
                        .')'
                    .')'
                    .'|t(?'
                        .'|eam\\-detail(?'
                            .'|(?:/(\\d+))?(*:2545)'
                            .'|/(\\d+)/join(*:2565)'
                        .')'
                        .'|ournament(?'
                            .'|\\-detail(?'
                                .'|(?:/(\\d+))?(*:2609)'
                                .'|/(\\d+)/participate(*:2636)'
                            .')'
                            .'|s/export/(pdf|excel)(*:2666)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        256 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        328 => [[['_route' => 'admin_cart_delete', '_controller' => 'App\\Controller\\Admin\\Page\\CartsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        354 => [[['_route' => 'admin_carts_export', '_controller' => 'App\\Controller\\Admin\\Page\\CartsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        387 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\Page\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        413 => [[['_route' => 'admin_categories_export', '_controller' => 'App\\Controller\\Admin\\Page\\CategoriesController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        446 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\Admin\\Page\\CommentsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        472 => [[['_route' => 'admin_comments_export', '_controller' => 'App\\Controller\\Admin\\Page\\CommentsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        503 => [[['_route' => 'admin_game_delete', '_controller' => 'App\\Controller\\Admin\\Page\\GamesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        529 => [[['_route' => 'admin_games_export', '_controller' => 'App\\Controller\\Admin\\Page\\GamesController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        563 => [[['_route' => 'admin_match_detail', '_controller' => 'App\\Controller\\Admin\\Page\\MatchDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        586 => [[['_route' => 'admin_match_delete', '_controller' => 'App\\Controller\\Admin\\Page\\MatchesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        618 => [[['_route' => 'admin_message_delete', '_controller' => 'App\\Controller\\Admin\\Page\\MessagesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        644 => [[['_route' => 'admin_messages_export', '_controller' => 'App\\Controller\\Admin\\Page\\MessagesController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        676 => [[['_route' => 'admin_order_delete', '_controller' => 'App\\Controller\\Admin\\Page\\OrdersController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        702 => [[['_route' => 'admin_orders_export', '_controller' => 'App\\Controller\\Admin\\Page\\OrdersController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        735 => [[['_route' => 'admin_post_detail', '_controller' => 'App\\Controller\\Admin\\Page\\PostDetailController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        760 => [[['_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\Page\\PostsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        786 => [[['_route' => 'admin_posts_export', '_controller' => 'App\\Controller\\Admin\\Page\\PostsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        819 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\Admin\\Page\\ProductsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        845 => [[['_route' => 'admin_products_export', '_controller' => 'App\\Controller\\Admin\\Page\\ProductsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        878 => [[['_route' => 'admin_report_detail', '_controller' => 'App\\Controller\\Admin\\Page\\ReportDetailController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        903 => [[['_route' => 'admin_report_delete', '_controller' => 'App\\Controller\\Admin\\Page\\ReportsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        929 => [[['_route' => 'admin_reports_export', '_controller' => 'App\\Controller\\Admin\\Page\\ReportsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        963 => [[['_route' => 'admin_team_delete', '_controller' => 'App\\Controller\\Admin\\Page\\TeamsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        989 => [[['_route' => 'admin_teams_export', '_controller' => 'App\\Controller\\Admin\\Page\\TeamsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        1027 => [[['_route' => 'admin_tournament_detail', 'id' => null, '_controller' => 'App\\Controller\\Admin\\Page\\TournamentDetailController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        1046 => [[['_route' => 'admin_tournament_edit', 'id' => null, '_controller' => 'App\\Controller\\Admin\\Page\\TournamentFormController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1073 => [[['_route' => 'admin_tournaments_export', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        1094 => [[['_route' => 'admin_tournament_delete', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1130 => [[['_route' => 'admin_tournament_request_detail', 'id' => null, '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestDetailController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        1157 => [[['_route' => 'admin_tournament_requests_export', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        1178 => [[['_route' => 'admin_tournament_request_review', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestsController::review'], ['id'], ['POST' => 0], null, false, false, null]],
        1214 => [[['_route' => 'admin_user_detail', '_controller' => 'App\\Controller\\Admin\\Page\\UserDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1233 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\Page\\UserEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1260 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\Page\\UsersController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1287 => [[['_route' => 'admin_users_export', '_controller' => 'App\\Controller\\Admin\\Page\\UsersController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        1354 => [[['_route' => 'front_captain_members_role', '_controller' => 'App\\Controller\\Front\\Page\\CaptainMembersController::updateRole'], ['teamId', 'userId'], ['POST' => 0], null, false, false, null]],
        1381 => [[['_route' => 'front_captain_members_remove', '_controller' => 'App\\Controller\\Front\\Page\\CaptainMembersController::remove'], ['teamId', 'userId'], ['POST' => 0], null, false, false, null]],
        1412 => [[['_route' => 'front_captain_members_reactivate', '_controller' => 'App\\Controller\\Front\\Page\\CaptainMembersController::reactivate'], ['teamId', 'userId'], ['POST' => 0], null, false, false, null]],
        1452 => [[['_route' => 'front_captain_product_edit', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1487 => [[['_route' => 'front_captain_product_image_remove', '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductEditController::removeImage'], ['id', 'imageId'], ['POST' => 0], null, false, false, null]],
        1511 => [[['_route' => 'front_captain_product_delete', '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1543 => [[['_route' => 'front_captain_requests_respond', '_controller' => 'App\\Controller\\Front\\Page\\CaptainRequestsController::respond'], ['id'], ['POST' => 0], null, false, false, null]],
        1580 => [[['_route' => 'front_captain_team_manage_update', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTeamManageController::update'], ['id'], ['POST' => 0], null, false, false, null]],
        1615 => [[['_route' => 'front_captain_tournaments_cancel', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTournamentsController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1637 => [[['_route' => 'front_captain_tournaments_checkin', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTournamentsController::checkin'], ['id'], ['POST' => 0], null, false, false, null]],
        1664 => [[['_route' => 'front_cart_add', '_controller' => 'App\\Controller\\Front\\Page\\CartController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        1696 => [[['_route' => 'front_cart_item_update', '_controller' => 'App\\Controller\\Front\\Page\\CartController::updateQuantity'], ['id'], ['POST' => 0], null, false, false, null]],
        1717 => [[['_route' => 'front_cart_item_remove', '_controller' => 'App\\Controller\\Front\\Page\\CartController::remove'], ['id'], ['POST' => 0], null, false, false, null]],
        1751 => [[['_route' => 'front_conversation', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\ConversationController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1788 => [[['_route' => 'front_feed_post_like', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::toggleLike'], ['id'], ['POST' => 0], null, false, false, null]],
        1810 => [[['_route' => 'front_feed_post_comment', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::addComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1831 => [[['_route' => 'front_feed_post_report', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::report'], ['id'], ['POST' => 0], null, false, false, null]],
        1872 => [[['_route' => 'front_friends_request_accept', '_controller' => 'App\\Controller\\Front\\Page\\FriendsController::acceptRequest'], ['id'], ['POST' => 0], null, false, false, null]],
        1893 => [[['_route' => 'front_friends_request_refuse', '_controller' => 'App\\Controller\\Front\\Page\\FriendsController::refuseRequest'], ['id'], ['POST' => 0], null, false, false, null]],
        1914 => [[['_route' => 'front_friends_request_cancel', '_controller' => 'App\\Controller\\Front\\Page\\FriendsController::cancelRequest'], ['id'], ['POST' => 0], null, false, false, null]],
        1946 => [[['_route' => 'front_post_delete', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1980 => [[['_route' => 'front_player_profile', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\PlayerProfileController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2017 => [[['_route' => 'front_product_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\ProductDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2053 => [[['_route' => 'front_profile_post_like', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::toggleLike'], ['id'], ['POST' => 0], null, false, false, null]],
        2075 => [[['_route' => 'front_profile_post_comment', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::addComment'], ['id'], ['POST' => 0], null, false, false, null]],
        2096 => [[['_route' => 'front_profile_post_report', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::reportPost'], ['id'], ['POST' => 0], null, false, false, null]],
        2123 => [[['_route' => 'front_profile_add_friend', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::addFriend'], ['id'], ['POST' => 0], null, false, false, null]],
        2158 => [[['_route' => 'front_game_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\GameDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2194 => [[['_route' => 'front_match_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\MatchDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2230 => [[['_route' => 'front_my_requests_cancel', '_controller' => 'App\\Controller\\Front\\Page\\MyRequestsController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        2269 => [[['_route' => 'front_my_teams_invite_respond', '_controller' => 'App\\Controller\\Front\\Page\\MyTeamsController::respondInvite'], ['id'], ['POST' => 0], null, false, false, null]],
        2289 => [[['_route' => 'front_my_teams_leave', '_controller' => 'App\\Controller\\Front\\Page\\MyTeamsController::leaveTeam'], ['teamId'], ['POST' => 0], null, false, false, null]],
        2328 => [[['_route' => 'front_order_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\OrderDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2366 => [[['_route' => 'front_organizer_match_edit', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerMatchEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2410 => [[['_route' => 'front_organizer_registration_status', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRegistrationsController::updateStatus'], ['tournamentId', 'teamId'], ['POST' => 0], null, false, false, null]],
        2441 => [[['_route' => 'front_organizer_request_detail', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRequestDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2470 => [[['_route' => 'front_organizer_requests_export', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRequestsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        2505 => [[['_route' => 'front_organizer_tournament_detail', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerTournamentDetailController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2545 => [[['_route' => 'front_team_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\TeamDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2565 => [[['_route' => 'front_team_detail_join', '_controller' => 'App\\Controller\\Front\\Page\\TeamDetailController::join'], ['id'], ['POST' => 0], null, false, false, null]],
        2609 => [[['_route' => 'front_tournament_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\TournamentDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2636 => [[['_route' => 'front_tournament_participate', '_controller' => 'App\\Controller\\Front\\Page\\TournamentDetailController::participate'], ['id'], ['POST' => 0], null, false, false, null]],
        2666 => [
            [['_route' => 'front_tournaments_export', '_controller' => 'App\\Controller\\Front\\Page\\TournamentsController::export'], ['format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
