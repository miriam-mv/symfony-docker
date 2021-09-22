<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/peticion' => [[['_route' => 'peticion', '_controller' => 'App\\Controller\\MainController::ajaxPeticion'], null, null, null, false, false, null]],
        '/simulacion_recorrido' => [[['_route' => 'simulacion_recorrido', '_controller' => 'App\\Controller\\MainController::ajaxRecorrido'], null, null, null, false, false, null]],
        '/simulacion_direccion' => [[['_route' => 'simulacion_direccion', '_controller' => 'App\\Controller\\MainController::ajaxDireccion'], null, null, null, false, false, null]],
        '/simulacion_peticiones' => [[['_route' => 'simulacion_peticiones', '_controller' => 'App\\Controller\\MainController::ajaxGetPeticiones'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
