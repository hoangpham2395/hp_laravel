<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Function helper
|--------------------------------------------------------------------------
|
| Open composer.json adn and
| "autoload": {
|     ...
|     "files": [
|         "app/Common/Helper.php",
|         "app/Common/HttpCode.php"
|     ]
| },
| Run composer dump-autoload
|
*/

if (!function_exists('getAppName')) {
    function getAppName($default = null)
    {
        return config('app.name', $default);
    }
}

if (!function_exists('getConstant')) {
    function getConstant($key = '', $default = null)
    {
        return config('constant.' . $key, $default);
    }
}

if (!function_exists('getConfig')) {
    function getConfig($key = '', $default = null)
    {
        $locale = getLocale();
        return config('config.' . $locale . '.' . $key, $default);
    }
}

if (!function_exists('getFileSystem')) {
    function getFileSystem($key = '', $default = null)
    {
        return config('filesystems.' . $key, $default);
    }
}

if (!function_exists('getMessage')) {
    function getMessage($key = null, $replace = [], $locale = null)
    {
        return trans('messages.' . $key, $replace, $locale);
    }
}

if (!function_exists('getAction')) {
    function getAction($key = null, $replace = [], $locale = null)
    {
        return trans('actions.' . $key, $replace, $locale);
    }
}

if (!function_exists('getCurrentRouteName')) {
    function getCurrentRouteName()
    {
        return Route::currentRouteName();
    }
}

if (!function_exists('getCurrentControllerAction')) {
    function getCurrentControllerAction()
    {
        $routeAction = Route::currentRouteAction();
        $arrayRouteAction = explode('\\', $routeAction);
        $controllerAction = end($arrayRouteAction);

        list($controller, $action) = explode('@', $controllerAction);
        return [
            'controller' => $controller,
            'action' => $action,
        ];
    }
}

if (!function_exists('getCurrentControllerName')) {
    function getCurrentControllerName($toLower = true)
    {
        $controller = data_get(getCurrentControllerAction(), 'controller');
        $controller = data_get(explode('Controller', $controller), 0);
        return $toLower ? Str::lower($controller) : $controller;
    }
}

if (!function_exists('getCurrentActionName')) {
    function getCurrentActionName()
    {
        return data_get(getCurrentControllerAction(), 'action');
    }
}

if (!function_exists('getLocale')) {
    function getLocale($default = 'vi')
    {
        $locale = app()->getLocale();
        return $locale ? $locale : config('app.locale', $default);
    }
}

if (!function_exists('setLocale')) {
    function setLocale($locale = 'vi')
    {
        app()->setLocale($locale);
    }
}

if (!function_exists('backendGuard')) {
    function backendGuard()
    {
        return Auth::guard('admins');
    }
}

if (!function_exists('frontendGuard')) {
    function frontendGuard()
    {
        return Auth::guard('users');
    }
}

if (!function_exists('isBackend')) {
    function isBackend()
    {

    }
}

if (!function_exists('isFrontend')) {
    function isFrontend()
    {

    }
}

if (!function_exists('isApi')) {
    function isApi()
    {

    }
}
