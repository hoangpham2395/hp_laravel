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

if (!function_exists('isMenuActive')) {
    function isMenuActive($controllerName, $actionName = null)
    {
        $isCurrentController = $controllerName == getCurrentControllerName();
        if (empty($actionName)) {
            return $isCurrentController;
        }

        // Sub menu
        $isCurrentAction = $actionName == getCurrentActionName();
        return $isCurrentController && $isCurrentAction;
    }
}

if (!function_exists('getClassActive')) {
    function getClassActive($controllerName, $actionName = null, $isCollapse = false)
    {
        $isMenuActive = isMenuActive($controllerName, $actionName);
        if (!$isMenuActive) return '';
        if ($isCollapse) return 'show';
        return 'active';
    }
}

if (!function_exists('getMenuBackend')) {
    function getMenuBackend($key = null, $replace = [], $locale = null)
    {
        $menu = trans('menu_backend.' . $key, $replace, $locale);
        if ($menu == 'menu_backend.' . $key) return null;
        return $menu;
    }
}

if (!function_exists('genBreadcrumb')) {
    function genBreadcrumb()
    {
        $controller = getCurrentControllerName();
        $actions = getMenuBackend($controller . '.' . 'actions');
        if (empty($actions)) return null;
        $action = getCurrentActionName();

        $breadcrumb = '<div class="breadcrumb-wrapper">' .
            '<h1>'. getMenuBackend($controller . '.' . 'name') .'</h1>' .
                '<nav aria-label="breadcrumb">' .
                    '<ol class="breadcrumb p-0">' .
                        '<li class="breadcrumb-item">' .
                            '<a href="' . route('backend.dashboard.index') . '">' .
                                '<span class="mdi mdi-home"></span>' .
                            '</a>' .
                        '</li>';

        $parents = data_get($actions, $action . '.parents', []);
        foreach ($parents as $parent) {
            $breadcrumb .= '<li class="breadcrumb-item">' .
                '<a href="' . route('backend.' . $controller . '.' . $parent) . '" >' . data_get($actions, $parent . '.text') . '</a>' .
            '</li>';
        }

        $breadcrumb .= '<li class="breadcrumb-item" aria-current="page">' . data_get($actions, $action . '.text') . '</li>' .
                '</ol>' .
            '</nav>' .
        '</div>';

        return $breadcrumb;
    }
}

if (!function_exists('genInputFile')) {
    function genInputFile($field)
    {
        if (empty($field)) $field = 'file';
        return view('layouts.backend.elements._file', ['fieldFile' => $field])->render();
    }
}

if (!function_exists('fullUrl')) {
    function fullUrl($url)
    {
        return asset($url);
    }
}
