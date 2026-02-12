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
        '/admin/carts' => [[['_route' => 'admin_carts', '_controller' => 'App\\Controller\\Admin\\Page\\CartsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\Admin\\Page\\CategoriesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category-form' => [[['_route' => 'admin_category_form', '_controller' => 'App\\Controller\\Admin\\Page\\CategoryFormController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/comments' => [[['_route' => 'admin_comments', '_controller' => 'App\\Controller\\Admin\\Page\\CommentsController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/game-detail' => [[['_route' => 'admin_game_detail', '_controller' => 'App\\Controller\\Admin\\Page\\GameDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/game-form' => [[['_route' => 'admin_game_form', '_controller' => 'App\\Controller\\Admin\\Page\\GameFormController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/games' => [[['_route' => 'admin_games', '_controller' => 'App\\Controller\\Admin\\Page\\GamesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/images' => [[['_route' => 'admin_images', '_controller' => 'App\\Controller\\Admin\\Page\\ImagesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/match-detail' => [[['_route' => 'admin_match_detail_legacy', '_controller' => 'App\\Controller\\Admin\\Page\\MatchDetailController::legacy'], null, ['GET' => 0], null, false, false, null]],
        '/admin/match-teams' => [[['_route' => 'admin_match_teams', '_controller' => 'App\\Controller\\Admin\\Page\\MatchTeamsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/matches' => [[['_route' => 'admin_matches', '_controller' => 'App\\Controller\\Admin\\Page\\MatchesController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/messages' => [[['_route' => 'admin_messages', '_controller' => 'App\\Controller\\Admin\\Page\\MessagesController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/notifications' => [[['_route' => 'admin_notifications', '_controller' => 'App\\Controller\\Admin\\Page\\NotificationsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/order-detail' => [[['_route' => 'admin_order_detail', '_controller' => 'App\\Controller\\Admin\\Page\\OrderDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/orders' => [[['_route' => 'admin_orders', '_controller' => 'App\\Controller\\Admin\\Page\\OrdersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/post-detail' => [[['_route' => 'admin_post_detail_legacy', '_controller' => 'App\\Controller\\Admin\\Page\\PostDetailController::legacy'], null, ['GET' => 0], null, false, false, null]],
        '/admin/posts' => [[['_route' => 'admin_posts', '_controller' => 'App\\Controller\\Admin\\Page\\PostsController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-detail' => [[['_route' => 'admin_product_detail', '_controller' => 'App\\Controller\\Admin\\Page\\ProductDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product-form' => [[['_route' => 'admin_product_form', '_controller' => 'App\\Controller\\Admin\\Page\\ProductFormController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/products' => [[['_route' => 'admin_products', '_controller' => 'App\\Controller\\Admin\\Page\\ProductsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/report-detail' => [[['_route' => 'admin_report_detail_legacy', '_controller' => 'App\\Controller\\Admin\\Page\\ReportDetailController::legacy'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reports' => [[['_route' => 'admin_reports', '_controller' => 'App\\Controller\\Admin\\Page\\ReportsController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/team-detail' => [[['_route' => 'admin_team_detail', '_controller' => 'App\\Controller\\Admin\\Page\\TeamDetailController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/team-invites' => [[['_route' => 'admin_team_invites', '_controller' => 'App\\Controller\\Admin\\Page\\TeamInvitesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/team-members' => [[['_route' => 'admin_team_members', '_controller' => 'App\\Controller\\Admin\\Page\\TeamMembersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/team-requests' => [[['_route' => 'admin_team_requests', '_controller' => 'App\\Controller\\Admin\\Page\\TeamRequestsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/teams' => [[['_route' => 'admin_teams', '_controller' => 'App\\Controller\\Admin\\Page\\TeamsController::index'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|comments/(?'
                        .'|(\\d+)/delete(*:236)'
                        .'|export/(pdf|excel)(*:262)'
                    .')'
                    .'|m(?'
                        .'|atch(?'
                            .'|\\-detail/(\\d+)(*:296)'
                            .'|es/(\\d+)/delete(*:319)'
                        .')'
                        .'|essages/(?'
                            .'|(\\d+)/delete(*:351)'
                            .'|export/(pdf|excel)(*:377)'
                        .')'
                    .')'
                    .'|post(?'
                        .'|\\-detail/(\\d+)(*:408)'
                        .'|s/(?'
                            .'|(\\d+)/delete(*:433)'
                            .'|export/(pdf|excel)(*:459)'
                        .')'
                    .')'
                    .'|report(?'
                        .'|\\-detail/(\\d+)(*:492)'
                        .'|s/(?'
                            .'|(\\d+)/delete(*:517)'
                            .'|export/(pdf|excel)(*:543)'
                        .')'
                    .')'
                    .'|tournament(?'
                        .'|s/(?'
                            .'|(\\d+)/detail(*:583)'
                            .'|(\\d+)/edit(*:601)'
                            .'|export/(pdf|excel)(*:627)'
                            .'|(\\d+)/delete(*:647)'
                        .')'
                        .'|\\-requests/(?'
                            .'|(\\d+)/detail(*:682)'
                            .'|export/(pdf|excel)(*:708)'
                            .'|(\\d+)/review(*:728)'
                        .')'
                    .')'
                    .'|user(?'
                        .'|\\-(?'
                            .'|detail/(\\d+)(*:762)'
                            .'|edit/(\\d+)(*:780)'
                        .')'
                        .'|s/(?'
                            .'|(\\d+)/delete(*:806)'
                            .'|export/(pdf|excel)(*:832)'
                        .')'
                    .')'
                .')'
                .'|/pages/(?'
                    .'|c(?'
                        .'|a(?'
                            .'|ptain\\-(?'
                                .'|members/(\\d+)/(\\d+)/remove(*:897)'
                                .'|product(?'
                                    .'|\\-edit(?'
                                        .'|(?:/(\\d+))?(*:935)'
                                        .'|/(\\d+)/images/(\\d+)/remove(*:969)'
                                    .')'
                                    .'|s/(\\d+)/delete(*:992)'
                                .')'
                                .'|requests/(\\d+)/respond(*:1023)'
                                .'|t(?'
                                    .'|eam\\-manage/(\\d+)/update(*:1060)'
                                    .'|ournaments/(?'
                                        .'|(\\d+)/cancel(*:1095)'
                                        .'|(\\d+)/checkin(*:1117)'
                                    .')'
                                .')'
                            .')'
                            .'|rt/(?'
                                .'|add/(\\d+)(*:1144)'
                                .'|items/(?'
                                    .'|(\\d+)/quantity(*:1176)'
                                    .'|(\\d+)/remove(*:1197)'
                                .')'
                            .')'
                        .')'
                        .'|onversation(?:/(\\d+))?(*:1231)'
                    .')'
                    .'|f(?'
                        .'|eed/posts/(?'
                            .'|(\\d+)/like(*:1268)'
                            .'|(\\d+)/comment(*:1290)'
                            .'|(\\d+)/report(*:1311)'
                        .')'
                        .'|riends/requests/(?'
                            .'|(\\d+)/accept(*:1352)'
                            .'|(\\d+)/refuse(*:1373)'
                            .'|(\\d+)/cancel(*:1394)'
                        .')'
                    .')'
                    .'|p(?'
                        .'|osts/(\\d+)/delete(*:1426)'
                        .'|layer\\-profile(?:/(\\d+))?(*:1460)'
                        .'|ro(?'
                            .'|duct\\-detail(?:/(\\d+))?(*:1497)'
                            .'|file/(?'
                                .'|posts/(?'
                                    .'|(\\d+)/like(*:1533)'
                                    .'|(\\d+)/comment(*:1555)'
                                    .'|(\\d+)/report(*:1576)'
                                .')'
                                .'|(\\d+)/add\\-friend(*:1603)'
                            .')'
                        .')'
                    .')'
                    .'|game\\-detail(?:/(\\d+))?(*:1638)'
                    .'|m(?'
                        .'|atch\\-detail(?:/(\\d+))?(*:1674)'
                        .'|y\\-(?'
                            .'|requests/(\\d+)/cancel(*:1710)'
                            .'|teams/(?'
                                .'|invites/(\\d+)/respond(*:1749)'
                                .'|(\\d+)/leave(*:1769)'
                            .')'
                        .')'
                    .')'
                    .'|or(?'
                        .'|der\\-detail(?:/(\\d+))?(*:1808)'
                        .'|ganizer\\-(?'
                            .'|match\\-edit/(\\d+)(*:1846)'
                            .'|re(?'
                                .'|gistrations/(\\d+)/(\\d+)/status(*:1890)'
                                .'|quest(?'
                                    .'|\\-detail/(\\d+)(*:1921)'
                                    .'|s/export/(pdf|excel)(*:1950)'
                                .')'
                            .')'
                            .'|tournament\\-detail/(\\d+)(*:1985)'
                        .')'
                    .')'
                    .'|t(?'
                        .'|eam\\-detail(?'
                            .'|(?:/(\\d+))?(*:2025)'
                            .'|/(\\d+)/join(*:2045)'
                        .')'
                        .'|ournament(?'
                            .'|\\-detail(?'
                                .'|(?:/(\\d+))?(*:2089)'
                                .'|/(\\d+)/participate(*:2116)'
                            .')'
                            .'|s/export/(pdf|excel)(*:2146)'
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
        236 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\Admin\\Page\\CommentsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        262 => [[['_route' => 'admin_comments_export', '_controller' => 'App\\Controller\\Admin\\Page\\CommentsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        296 => [[['_route' => 'admin_match_detail', '_controller' => 'App\\Controller\\Admin\\Page\\MatchDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        319 => [[['_route' => 'admin_match_delete', '_controller' => 'App\\Controller\\Admin\\Page\\MatchesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        351 => [[['_route' => 'admin_message_delete', '_controller' => 'App\\Controller\\Admin\\Page\\MessagesController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        377 => [[['_route' => 'admin_messages_export', '_controller' => 'App\\Controller\\Admin\\Page\\MessagesController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        408 => [[['_route' => 'admin_post_detail', '_controller' => 'App\\Controller\\Admin\\Page\\PostDetailController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        433 => [[['_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\Page\\PostsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        459 => [[['_route' => 'admin_posts_export', '_controller' => 'App\\Controller\\Admin\\Page\\PostsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        492 => [[['_route' => 'admin_report_detail', '_controller' => 'App\\Controller\\Admin\\Page\\ReportDetailController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        517 => [[['_route' => 'admin_report_delete', '_controller' => 'App\\Controller\\Admin\\Page\\ReportsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        543 => [[['_route' => 'admin_reports_export', '_controller' => 'App\\Controller\\Admin\\Page\\ReportsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        583 => [[['_route' => 'admin_tournament_detail', 'id' => null, '_controller' => 'App\\Controller\\Admin\\Page\\TournamentDetailController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        601 => [[['_route' => 'admin_tournament_edit', 'id' => null, '_controller' => 'App\\Controller\\Admin\\Page\\TournamentFormController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        627 => [[['_route' => 'admin_tournaments_export', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        647 => [[['_route' => 'admin_tournament_delete', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        682 => [[['_route' => 'admin_tournament_request_detail', 'id' => null, '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestDetailController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        708 => [[['_route' => 'admin_tournament_requests_export', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        728 => [[['_route' => 'admin_tournament_request_review', '_controller' => 'App\\Controller\\Admin\\Page\\TournamentRequestsController::review'], ['id'], ['POST' => 0], null, false, false, null]],
        762 => [[['_route' => 'admin_user_detail', '_controller' => 'App\\Controller\\Admin\\Page\\UserDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        780 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\Page\\UserEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        806 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\Page\\UsersController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        832 => [[['_route' => 'admin_users_export', '_controller' => 'App\\Controller\\Admin\\Page\\UsersController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        897 => [[['_route' => 'front_captain_members_remove', '_controller' => 'App\\Controller\\Front\\Page\\CaptainMembersController::remove'], ['teamId', 'userId'], ['POST' => 0], null, false, false, null]],
        935 => [[['_route' => 'front_captain_product_edit', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        969 => [[['_route' => 'front_captain_product_image_remove', '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductEditController::removeImage'], ['id', 'imageId'], ['POST' => 0], null, false, false, null]],
        992 => [[['_route' => 'front_captain_product_delete', '_controller' => 'App\\Controller\\Front\\Page\\CaptainProductsController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1023 => [[['_route' => 'front_captain_requests_respond', '_controller' => 'App\\Controller\\Front\\Page\\CaptainRequestsController::respond'], ['id'], ['POST' => 0], null, false, false, null]],
        1060 => [[['_route' => 'front_captain_team_manage_update', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTeamManageController::update'], ['id'], ['POST' => 0], null, false, false, null]],
        1095 => [[['_route' => 'front_captain_tournaments_cancel', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTournamentsController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1117 => [[['_route' => 'front_captain_tournaments_checkin', '_controller' => 'App\\Controller\\Front\\Page\\CaptainTournamentsController::checkin'], ['id'], ['POST' => 0], null, false, false, null]],
        1144 => [[['_route' => 'front_cart_add', '_controller' => 'App\\Controller\\Front\\Page\\CartController::add'], ['id'], ['POST' => 0], null, false, true, null]],
        1176 => [[['_route' => 'front_cart_item_update', '_controller' => 'App\\Controller\\Front\\Page\\CartController::updateQuantity'], ['id'], ['POST' => 0], null, false, false, null]],
        1197 => [[['_route' => 'front_cart_item_remove', '_controller' => 'App\\Controller\\Front\\Page\\CartController::remove'], ['id'], ['POST' => 0], null, false, false, null]],
        1231 => [[['_route' => 'front_conversation', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\ConversationController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1268 => [[['_route' => 'front_feed_post_like', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::toggleLike'], ['id'], ['POST' => 0], null, false, false, null]],
        1290 => [[['_route' => 'front_feed_post_comment', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::addComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1311 => [[['_route' => 'front_feed_post_report', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::report'], ['id'], ['POST' => 0], null, false, false, null]],
        1352 => [[['_route' => 'front_friends_request_accept', '_controller' => 'App\\Controller\\Front\\Page\\FriendsController::acceptRequest'], ['id'], ['POST' => 0], null, false, false, null]],
        1373 => [[['_route' => 'front_friends_request_refuse', '_controller' => 'App\\Controller\\Front\\Page\\FriendsController::refuseRequest'], ['id'], ['POST' => 0], null, false, false, null]],
        1394 => [[['_route' => 'front_friends_request_cancel', '_controller' => 'App\\Controller\\Front\\Page\\FriendsController::cancelRequest'], ['id'], ['POST' => 0], null, false, false, null]],
        1426 => [[['_route' => 'front_post_delete', '_controller' => 'App\\Controller\\Front\\Page\\FeedController::deletePost'], ['id'], ['POST' => 0], null, false, false, null]],
        1460 => [[['_route' => 'front_player_profile', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\PlayerProfileController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1497 => [[['_route' => 'front_product_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\ProductDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1533 => [[['_route' => 'front_profile_post_like', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::toggleLike'], ['id'], ['POST' => 0], null, false, false, null]],
        1555 => [[['_route' => 'front_profile_post_comment', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::addComment'], ['id'], ['POST' => 0], null, false, false, null]],
        1576 => [[['_route' => 'front_profile_post_report', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::reportPost'], ['id'], ['POST' => 0], null, false, false, null]],
        1603 => [[['_route' => 'front_profile_add_friend', '_controller' => 'App\\Controller\\Front\\Page\\ProfileController::addFriend'], ['id'], ['POST' => 0], null, false, false, null]],
        1638 => [[['_route' => 'front_game_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\GameDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1674 => [[['_route' => 'front_match_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\MatchDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1710 => [[['_route' => 'front_my_requests_cancel', '_controller' => 'App\\Controller\\Front\\Page\\MyRequestsController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1749 => [[['_route' => 'front_my_teams_invite_respond', '_controller' => 'App\\Controller\\Front\\Page\\MyTeamsController::respondInvite'], ['id'], ['POST' => 0], null, false, false, null]],
        1769 => [[['_route' => 'front_my_teams_leave', '_controller' => 'App\\Controller\\Front\\Page\\MyTeamsController::leaveTeam'], ['teamId'], ['POST' => 0], null, false, false, null]],
        1808 => [[['_route' => 'front_order_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\OrderDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1846 => [[['_route' => 'front_organizer_match_edit', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerMatchEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1890 => [[['_route' => 'front_organizer_registration_status', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRegistrationsController::updateStatus'], ['tournamentId', 'teamId'], ['POST' => 0], null, false, false, null]],
        1921 => [[['_route' => 'front_organizer_request_detail', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRequestDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        1950 => [[['_route' => 'front_organizer_requests_export', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerRequestsController::export'], ['format'], ['GET' => 0], null, false, true, null]],
        1985 => [[['_route' => 'front_organizer_tournament_detail', '_controller' => 'App\\Controller\\Front\\Page\\OrganizerTournamentDetailController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2025 => [[['_route' => 'front_team_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\TeamDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2045 => [[['_route' => 'front_team_detail_join', '_controller' => 'App\\Controller\\Front\\Page\\TeamDetailController::join'], ['id'], ['POST' => 0], null, false, false, null]],
        2089 => [[['_route' => 'front_tournament_detail', 'id' => null, '_controller' => 'App\\Controller\\Front\\Page\\TournamentDetailController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        2116 => [[['_route' => 'front_tournament_participate', '_controller' => 'App\\Controller\\Front\\Page\\TournamentDetailController::participate'], ['id'], ['POST' => 0], null, false, false, null]],
        2146 => [
            [['_route' => 'front_tournaments_export', '_controller' => 'App\\Controller\\Front\\Page\\TournamentsController::export'], ['format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
