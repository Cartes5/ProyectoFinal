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
        '/coches' => [
            [['_route' => 'app_coches_index', '_controller' => 'App\\Controller\\CochesController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'coches', '_controller' => 'App\\Controller\\HomeController::coches'], null, null, null, false, false, null],
        ],
        '/coches/new' => [[['_route' => 'app_coches_new', '_controller' => 'App\\Controller\\CochesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/control' => [
            [['_route' => 'app_control_index', '_controller' => 'App\\Controller\\ControlController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'control', '_controller' => 'App\\Controller\\HomeController::control'], null, null, null, false, false, null],
        ],
        '/control/new' => [[['_route' => 'app_control_new', '_controller' => 'App\\Controller\\ControlController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/empleados' => [
            [['_route' => 'app_empleados_index', '_controller' => 'App\\Controller\\EmpleadosController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'empleados', '_controller' => 'App\\Controller\\HomeController::empleados'], null, null, null, false, false, null],
        ],
        '/empleados/new' => [[['_route' => 'app_empleados_new', '_controller' => 'App\\Controller\\EmpleadosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/incidencia' => [
            [['_route' => 'incidencia', '_controller' => 'App\\Controller\\HomeController::incidencia'], null, null, null, false, false, null],
            [['_route' => 'app_incidencia_index', '_controller' => 'App\\Controller\\IncidenciaController::index'], null, ['GET' => 0], null, true, false, null],
        ],
        '/render-header' => [[['_route' => 'renderHeader', '_controller' => 'App\\Controller\\HomeController::renderHeader'], null, null, null, false, false, null]],
        '/incidencia/new' => [[['_route' => 'app_incidencia_new', '_controller' => 'App\\Controller\\IncidenciaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/co(?'
                    .'|ches/([^/]++)(?'
                        .'|(*:191)'
                        .'|/edit(*:204)'
                        .'|(*:212)'
                    .')'
                    .'|ntrol/([^/]++)(?'
                        .'|(*:238)'
                        .'|/edit(*:251)'
                        .'|(*:259)'
                    .')'
                .')'
                .'|/empleados/([^/]++)(?'
                    .'|(*:291)'
                    .'|/edit(*:304)'
                    .'|(*:312)'
                .')'
                .'|/incidencia/([^/]++)(?'
                    .'|(*:344)'
                    .'|/edit(*:357)'
                    .'|(*:365)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'app_coches_show', '_controller' => 'App\\Controller\\CochesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'app_coches_edit', '_controller' => 'App\\Controller\\CochesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'app_coches_delete', '_controller' => 'App\\Controller\\CochesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_control_show', '_controller' => 'App\\Controller\\ControlController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        251 => [[['_route' => 'app_control_edit', '_controller' => 'App\\Controller\\ControlController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        259 => [[['_route' => 'app_control_delete', '_controller' => 'App\\Controller\\ControlController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_empleados_show', '_controller' => 'App\\Controller\\EmpleadosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_empleados_edit', '_controller' => 'App\\Controller\\EmpleadosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'app_empleados_delete', '_controller' => 'App\\Controller\\EmpleadosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        344 => [[['_route' => 'app_incidencia_show', '_controller' => 'App\\Controller\\IncidenciaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        357 => [[['_route' => 'app_incidencia_edit', '_controller' => 'App\\Controller\\IncidenciaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        365 => [
            [['_route' => 'app_incidencia_delete', '_controller' => 'App\\Controller\\IncidenciaController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
