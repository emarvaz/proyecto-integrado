<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/ability/category' => [[['_route' => 'app_ability_category', '_controller' => 'App\\Controller\\AbilityCategoryController::index'], null, null, null, false, false, null]],
        '/administration/ability-category/list' => [[['_route' => 'administration_ability_category_list', '_controller' => 'App\\Controller\\AbilityCategoryController::abilityCategoryList'], null, null, null, false, false, null]],
        '/administration/ability-category/create' => [[['_route' => 'administration_ability_category_create', '_controller' => 'App\\Controller\\AbilityCategoryController::abilityCategoryCreate'], null, null, null, false, false, null]],
        '/ability' => [[['_route' => 'app_ability', '_controller' => 'App\\Controller\\AbilityController::index'], null, null, null, false, false, null]],
        '/administration/ability/list' => [[['_route' => 'administration_ability_list', '_controller' => 'App\\Controller\\AbilityController::abilityList'], null, null, null, false, false, null]],
        '/administration/ability/create' => [[['_route' => 'administration_ability_create', '_controller' => 'App\\Controller\\AbilityController::abilityCreate'], null, null, null, false, false, null]],
        '/administration' => [[['_route' => 'administration', '_controller' => 'App\\Controller\\AdministrationController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ApplicationController::index'], null, null, null, false, false, null]],
        '/api/cards' => [
            [['_route' => 'api_card_list', '_controller' => 'App\\Controller\\CardAPIController::list'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_card_create', '_controller' => 'App\\Controller\\CardAPIController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/card/list' => [[['_route' => 'card_list', '_controller' => 'App\\Controller\\CardController::list'], null, null, null, false, false, null]],
        '/administration/card/list' => [[['_route' => 'administration_card_list', '_controller' => 'App\\Controller\\CardController::administrationCardList'], null, null, null, false, false, null]],
        '/administration/card/create' => [[['_route' => 'administration_card_create', '_controller' => 'App\\Controller\\CardController::cardCreate'], null, null, null, false, false, null]],
        '/sign-in' => [[['_route' => 'sign_in', '_controller' => 'App\\Controller\\SecurityController::signIn'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/administration/user/list' => [[['_route' => 'administration_user_list', '_controller' => 'App\\Controller\\UserController::administrationUserList'], null, null, null, false, false, null]],
        '/administration/user/create' => [[['_route' => 'administration_user_create', '_controller' => 'App\\Controller\\UserController::administrationUserCreate'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dministration/(?'
                        .'|ability(?'
                            .'|\\-category/(?'
                                .'|edit/([^/]++)(*:261)'
                                .'|delete/([^/]++)(*:284)'
                            .')'
                            .'|/(?'
                                .'|edit/([^/]++)(*:310)'
                                .'|delete/([^/]++)(*:333)'
                            .')'
                        .')'
                        .'|card/(?'
                            .'|edit/([^/]++)(*:364)'
                            .'|delete/([^/]++)(*:387)'
                        .')'
                        .'|user/(?'
                            .'|edit/([^/]++)(*:417)'
                            .'|delete/([^/]++)(*:440)'
                        .')'
                    .')'
                    .'|pi/cards/([^/]++)(*:467)'
                .')'
                .'|/card(?'
                    .'|/(\\d+)(*:490)'
                    .'|\\-deck(?:/(\\d+))?(*:515)'
                .')'
                .'|/profile/edit/([^/]++)(*:546)'
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
        261 => [[['_route' => 'administration_ability_category_edit', '_controller' => 'App\\Controller\\AbilityCategoryController::abilityCategoryEdit'], ['id'], null, null, false, true, null]],
        284 => [[['_route' => 'administration_ability_category_delete', '_controller' => 'App\\Controller\\AbilityCategoryController::abilityCategoryDelete'], ['id'], null, null, false, true, null]],
        310 => [[['_route' => 'administration_ability_edit', '_controller' => 'App\\Controller\\AbilityController::abilityEdit'], ['id'], null, null, false, true, null]],
        333 => [[['_route' => 'administration_ability_delete', '_controller' => 'App\\Controller\\AbilityController::abilityDelete'], ['id'], null, null, false, true, null]],
        364 => [[['_route' => 'administration_card_edit', '_controller' => 'App\\Controller\\CardController::cardEdit'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'administration_card_delete', '_controller' => 'App\\Controller\\CardController::cardDelete'], ['id'], null, null, false, true, null]],
        417 => [[['_route' => 'administration_user_edit', '_controller' => 'App\\Controller\\UserController::administrationUserEdit'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'administration_user_delete', '_controller' => 'App\\Controller\\UserController::administrationUserDelete'], ['id'], null, null, false, true, null]],
        467 => [[['_route' => 'api_card_show', '_controller' => 'App\\Controller\\CardAPIController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        490 => [[['_route' => 'card', '_controller' => 'App\\Controller\\CardController::index'], ['id'], null, null, false, true, null]],
        515 => [[['_route' => 'card_deck__list', 'id' => null, '_controller' => 'App\\Controller\\CardDeckController::edit'], ['id'], null, null, false, true, null]],
        546 => [
            [['_route' => 'profile_edit', '_controller' => 'App\\Controller\\UserController::profileEdit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
