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
                .'|/admin/(?'
                    .'|c(?'
                        .'|a(?'
                            .'|rts/(?'
                                .'|(\\d+)/delete(*:239)'
                                .'|export/(pdf|excel)(*:265)'
                            .')'
                            .'|tegories/(?'
                                .'|(\\d+)/delete(*:298)'
                                .'|export/(pdf|excel)(*:324)'
                            .')'
                        .')'
                        .'|omments/(?'
                            .'|(\\d+)/delete(*:357)'
                            .'|export/(pdf|excel)(*:383)'
                        .')'
                    .')'
                    .'|games/(?'
                        .'|(\\d+)/delete(*:414)'
                        .'|export/(pdf|excel)(*:440)'
                    .')'
                    .'|m(?'
                        .'|atch(?'
                            .'|\\-detail/(\\d+)(*:474)'
                            .'|es/(\\d+)/delete(*:497)'
                        .')'
                        .'|essages/(?'
                            .'|(\\d+)/delete(*:529)'
                            .'|export/(pdf|excel)(*:555)'
                        .')'
                    .')'
                    .'|orders/(?'
                        .'|(\\d+)/delete(*:587)'
                        .'|export/(pdf|excel)(*:613)'
                    .')'
                    .'|p(?'
                        .'|ost(?'
                            .'|\\-detail/(\\d+)(*:646)'
                            .'|s/(?'
                                .'|(\\d+)/delete(*:671)'
                                .'|export/(pdf|excel)(*:697)'
                            .')'
                        .')'
                        .'|roducts/(?'
                            .'|(\\d+)/delete(*:730)'
                            .'|export/(pdf|excel)(*:756)'
                        .')'
                    .')'
                    .'|report(?'
                        .'|\\-detail/(\\d+)(*:789)'
                        .'|s/(?'
                            .'|(\\d+)/delete(*:814)'
                            .'|export/(pdf|excel)(*:840)'
                        .')'
                    .')'
                    .'|t(?'
                        .'|eams/(?'
                            .'|(\\d+)/delete(*:874)'
                            .'|export/(pdf|excel)(*:900)'
                        .')'
                        .'|ournament(?'
                            .'|s/(?'
                                .'|(\\d+)/detail(*:938)'
                                .'|(\\d+)/edit(*:956)'
                                .'|export/(pdf|excel)(*:982)'
                                .'|(\\d+)/delete(*:1002)'
                            .')'
                            .'|\\-requests/(?'
                                .'|(\\d+)/detail(*:1038)'
                                .'|export/(pdf|excel)(*:1065)'
                                .'|(\\d+)/review(*:1086)'
                            .')'
                        .')'
                    .')'
                    .'|user(?'
                        .'|\\-(?'
                            .'|detail/(\\d+)(*:1122)'
                            .'|edit/(\\d+)(*:1141)'
                        .')'
                        .'|s/(?'
                            .'|(\\d+)/delete(*:1168)'
                            .'|export/(pdf|excel)(*:1195)'
                        .')'
                    .')'
                .')'
                .'|/pages/(?'
                    .'|c(?'
                        .'|a(?'
                            .'|ptain\\-(?'
                                .'|members/(\\d+)/(\\d+)/remove(*:1261)'
                                .'|product(?'
                                    .'|\\-edit(?'
                                        .'|(?:/(\\d+))?(*:1300)'
                                        .'|/(\\d+)/images/(\\d+)/remove(*:1335)'
                                    .')'
                                    .'|s/(\\d+)/delete(*:1359)'
                                .')'
                                .'|requests/(\\d+)/respond(*:1391)'
                                .'|t(?'
                                    .'|eam\\-manage/(\\d+)/update(*:1428)'
                                    .'|ournaments/(?'
                                        .'|(\\d+)/cancel(*:1463)'
                                        .'|(\\d+)/checkin(*:1485)'
                                    .')'
                                .')'
                            .')'
                            .'|rt/(?'
                                .'|add/(\\d+)(*:1512)'
                                .'|items/(?'
                                    .'|(\\d+)/quantity(*:1544)'
                                    .'|(\\d+)/remove(*:1565)'
                                .')'
                            .')'
                        .')'
                        .'|onversation(?:/(\\d+))?(*:1599)'
                    .')'
                    .'|f(?'
                        .'|eed/posts/(?'
                            .'|(\\d+)/like(*:1636)'
                            .'|(\\d+)/comment(*:1658)'
                            .'|(\\d+)/report(*:1679)'
                        .')'
                        .'|riends/requests/(?'
                            .'|(\\d+)/accept(*:1720)'
                            .'|(\\d+)/refuse(*:1741)'
                            .'|(\\d+)/cancel(*:1762)'
                        .')'
                    .')'
                    .'|p(?'
                        .'|osts/(\\d+)/delete(*:1794)'
                        .'|layer\\-profile(?:/(\\d+))?(*:1828)'
                        .'|ro(?'
                            .'|duct\\-detail(?:/(\\d+))?(*:1865)'
                            .'|file/(?'
                                .'|posts/(?'
                                    .'|(\\d+)/like(*:1901)'
                                    .'|(\\d+)/comment(*:1923)'
                                    .'|(\\d+)/report(*:1944)'
                                .')'
                                .'|(\\d+)/add\\-friend(*:1971)'
                            .')'
                        .')'
                    .')'
                    .'|game\\-detail(?:/(\\d+))?(*:2006)'
                    .'|m(?'
                        .'|atch\\-detail(?:/(\\d+))?(*:2042)'
                        .'|y\\-(?'
                            .'|requests/(\\d+)/cancel(*:2078)'
                            .'|teams/(?'
                                .'|invites/(\\d+)/respond(*:2117)'
                                .'|(\\d+)/leave(*:2137)'
                            .')'
                        .')'
                    .')'
                    .'|or(?'
                        .'|der\\-detail(?:/(\\d+))?(*:2176)'
                        .'|ganizer\\-(?'
                            .'|match\\-edit/(\\d+)(*:2214)'
                            .'|re(?'
                                .'|gistrations/(\\d+)/(\\d+)/status(*:2258)'
                                .'|quest(?'
                                    .'|\\-detail/(\\d+)(*:2289)'
                                    .'|s/export/(pdf|excel)(*:2318)'
                                .')'
                            .')'
                            .'|tournament\\-detail/(\\d+)(*:2353)'
                        .')'
                    .')'
                    .'|t(?'
                        .'|eam\\-detail(?'
                            .'|(?:/(\\d+))?(*:2393)'
                            .'|/(\\d+)/join(*:2413)'
                        .')'
                        .'|ournament(?'
                            .'|\\-detail(?'
                                .'|(?:/(\\d+))?(*:2457)'
                                .'|/(\\d+)/participate(*:2484)'
                            .')'
                            .'|s/export/(pdf|excel)(*:2514)'
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
        239 => [[['_route' => 'admin_cart_delete', '_controller' => 'App\\Controller\\Admin\\Page\\CartsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        265 => [[['_route' => 'admin_carts_export', '_controller' => 'App\\Controller\\Admin\\Page\\CartsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        298 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\Page\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        324 => [[['_route' => 'admin_categories_export', '_controller' => 'App\\Controller\\Admin\\Page\\CategoriesController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        357 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\Admin\\Page\\CommentsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        383 => [[['_route' => 'admin_comments_export', '_controller' => 'App\\Controller\\Admin\\Page\\CommentsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        414 => [[['_route' => 'admin_game_delete', '_controller' => 'App\\Controller\\Admin\\Page\\GamesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        440 => [[['_route' => 'admin_games_export', '_controller' => 'App\\Controller\\Admin\\Page\\GamesController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        474 => [[['_route' => 'admin_match_detail', '_controller' => 'App\\Controller\\Admin\\Page\\MatchDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        497 => [[['_route' => 'admin_match_delete', '_controller' => 'App\\Controller\\Admin\\Page\\MatchesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        529 => [[['_route' => 'admin_message_delete', '_controller' => 'App\\Controller\\Admin\\Page\\MessagesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        555 => [[['_route' => 'admin_messages_export', '_controller' => 'App\\Controller\\Admin\\Page\\MessagesController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        587 => [[['_route' => 'admin_order_delete', '_controller' => 'App\\Controller\\Admin\\Page\\OrdersController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        613 => [[['_route' => 'admin_orders_export', '_controller' => 'App\\Controller\\Admin\\Page\\OrdersController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        646 => [[['_route' => 'admin_post_detail', '_controller' => 'App\\Controller\\Admin\\Page\\PostDetailController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        671 => [[['_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\Page\\PostsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        697 => [[['_route' => 'admin_posts_export', '_controller' => 'App\\Controller\\Admin\\Page\\PostsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        730 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\Admin\\Page\\ProductsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        756 => [[['_route' => 'admin_products_export', '_controller' => 'App\\Controller\\Admin\\Page\\ProductsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        789 => [[['_route' => 'admin_report_detail', '_controller' => 'App\\Controller\\Admin\\Page\\ReportDetailController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        814 => [[['_route' => 'admin_report_delete', '_controller' => 'App\\Controller\\Admin\\Page\\ReportsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        840 => [[['_route' => 'admin_reports_export', '_controller' => 'App\\Controller\\Admin\\Page\\ReportsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        874 => [[['_route' => 'admin_team_delete', '_controller' => 'App\\Controller\\Admin\\Page\\TeamsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        900 => [[['_route' => 'admin_teams_export', '_controller' => 'App\\Controller\\Admin\\Page\\TeamsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        938 => [[['_route' => 'admin_tournament_detail', 'id' => null, '_controller' => 'App\\Controller\\Admin\\Page\\TournamentDetailController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        956 => [[['_route' => 'admin_tournament_edit', 'id' => null, '_controller' => 'App\\Controller\\Admin\\Page\\TournamentFormController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        982 => [[['_route' => 'admin_tournaments_export', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        1002 => [[['_route' => 'admin_tournament_delete', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1038 => [[['_route' => 'admin_tournament_request_detail', 'id' => null, '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestDetailController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        1065 => [[['_route' => 'admin_tournament_requests_export', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        1086 => [[['_route' => 'admin_tournament_request_review', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestsController::review'], ['id'], ['POST' => 0], null, false, false, null]],
        1122 => [[['_route' => 'admin_user_detail', '_controller' => 'App\\Controller\\Admin\\Page\\UserDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1141 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\Page\\UserEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1168 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\Page\\UsersController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1195 => [[['_route' => 'admin_users_export', '_controller' => 'App\\Controller\\Admin\\Page\\UsersController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        1261 => [[['_route' => 'front_captain_members_remove', '_controller' => 'App\\Controller\\Front\\Page\\CaptainMembersController::remove'], ['teamId', 'userId'], ['POST' => 0], null, false, false, null]],
        1300 => [[['_route' => 'front_captain_product_edit', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1335 => [[['_route' => 'front_captain_product_image_remove', '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductEditController::removeImage'], ['id', 'imageId'], ['POST' => 0], null, false, false, null]],
        1359 => [[['_route' => 'front_captain_product_delete', '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1391 => [[['_route' => 'front_captain_requests_respond', '_controller' => 'App\\Controller\\Front\\Page\\CaptainRequestsController::respond'], ['id'], ['POST' => 0], null, false, false, null]],
        1428 => [[['_route' => 'front_captain_team_manage_update', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTeamManageController::update'], ['id'], ['POST' => 0], null, false, false, null]],
        1463 => [[['_route' => 'front_captain_tournaments_cancel', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTournamentsController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1485 => [[['_route' => 'front_captain_tournaments_checkin', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTournamentsController::checkin'], ['id'], ['POST' => 0], null, false, false, null]],
        1512 => [[['_route' => 'front_cart_add', '_controller' => 'App\\Controller\\Front\\Page\\CartController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        1544 => [[['_route' => 'front_cart_item_update', '_controller' => 'App\\Controller\\Front\\Page\\CartController::updateQuantity'], ['id'], ['POST' => 0], null, false, false, null]],
        1565 => [[['_route' => 'front_cart_item_remove', '_controller' => 'App\\Controller\\Front\\Page\\CartController::remove'], ['id'], ['POST' => 0], null, false, false, null]],
        1599 => [[['_route' => 'front_conversation', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\ConversationController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1636 => [[['_route' => 'front_feed_post_like', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::toggleLike'], ['id'], ['POST' => 0], null, false, false, null]],
        1658 => [[['_route' => 'front_feed_post_comment', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::addComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1679 => [[['_route' => 'front_feed_post_report', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::report'], ['id'], ['POST' => 0], null, false, false, null]],
        1720 => [[['_route' => 'front_friends_request_accept', '_controller' => 'App\\Controller\\Front\\Page\\FriendsController::acceptRequest'], ['id'], ['POST' => 0], null, false, false, null]],
        1741 => [[['_route' => 'front_friends_request_refuse', '_controller' => 'App\\Controller\\Front\\Page\\FriendsController::refuseRequest'], ['id'], ['POST' => 0], null, false, false, null]],
        1762 => [[['_route' => 'front_friends_request_cancel', '_controller' => 'App\\Controller\\Front\\Page\\FriendsController::cancelRequest'], ['id'], ['POST' => 0], null, false, false, null]],
        1794 => [[['_route' => 'front_post_delete', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1828 => [[['_route' => 'front_player_profile', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\PlayerProfileController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1865 => [[['_route' => 'front_product_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\ProductDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1901 => [[['_route' => 'front_profile_post_like', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::toggleLike'], ['id'], ['POST' => 0], null, false, false, null]],
        1923 => [[['_route' => 'front_profile_post_comment', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::addComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1944 => [[['_route' => 'front_profile_post_report', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::reportPost'], ['id'], ['POST' => 0], null, false, false, null]],
        1971 => [[['_route' => 'front_profile_add_friend', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::addFriend'], ['id'], ['POST' => 0], null, false, false, null]],
        2006 => [[['_route' => 'front_game_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\GameDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2042 => [[['_route' => 'front_match_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\MatchDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2078 => [[['_route' => 'front_my_requests_cancel', '_controller' => 'App\\Controller\\Front\\Page\\MyRequestsController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        2117 => [[['_route' => 'front_my_teams_invite_respond', '_controller' => 'App\\Controller\\Front\\Page\\MyTeamsController::respondInvite'], ['id'], ['POST' => 0], null, false, false, null]],
        2137 => [[['_route' => 'front_my_teams_leave', '_controller' => 'App\\Controller\\Front\\Page\\MyTeamsController::leaveTeam'], ['teamId'], ['POST' => 0], null, false, false, null]],
        2176 => [[['_route' => 'front_order_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\OrderDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2214 => [[['_route' => 'front_organizer_match_edit', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerMatchEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2258 => [[['_route' => 'front_organizer_registration_status', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRegistrationsController::updateStatus'], ['tournamentId', 'teamId'], ['POST' => 0], null, false, false, null]],
        2289 => [[['_route' => 'front_organizer_request_detail', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRequestDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2318 => [[['_route' => 'front_organizer_requests_export', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRequestsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        2353 => [[['_route' => 'front_organizer_tournament_detail', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerTournamentDetailController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2393 => [[['_route' => 'front_team_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\TeamDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2413 => [[['_route' => 'front_team_detail_join', '_controller' => 'App\\Controller\\Front\\Page\\TeamDetailController::join'], ['id'], ['POST' => 0], null, false, false, null]],
        2457 => [[['_route' => 'front_tournament_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\TournamentDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2484 => [[['_route' => 'front_tournament_participate', '_controller' => 'App\\Controller\\Front\\Page\\TournamentDetailController::participate'], ['id'], ['POST' => 0], null, false, false, null]],
        2514 => [
            [['_route' => 'front_tournaments_export', '_controller' => 'App\\Controller\\Front\\Page\\TournamentsController::export'], ['format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
