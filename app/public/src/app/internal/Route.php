<?php

namespace internal;

class Route
{
    private static $arrayRoutes = [];
    public static function get($url, $controllerMethod)
    {
        $url = trim(strtolower($url));
        Route::$arrayRoutes["get::$url"] = $controllerMethod;
    }

    public static function post($url, $controllerMethod)
    {
        $url = trim(strtolower($url));
        Route::$arrayRoutes["post::$url"] = $controllerMethod;
    }

    private static function extractControllerMethodStr($controllerMethodStr, &$className, &$methodName)
    {
        $controllerMethodStr = trim($controllerMethodStr);
        $strParts = explode('@', $controllerMethodStr);
        if (!$strParts) {
            throw new \Exception("Controller method string is invalid! Valid format is 'NameOfClass@NameOfMethod'");
        }
        if (count($strParts) !== 2) {
            throw new \Exception("Controller method string is invalid! Valid format is 'NameOfClass@NameOfMethod'");
        }
        $className = $strParts[0];
        $methodName = $strParts[1];
    }

    // URL Format: /index.php/path/subpath
    // Or        : /path/subpath
    // routeUrl = /path/subpath
    private static function extractInfoFromHttpRequest(&$method, &$routeUrl)
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $httpUrl = $_SERVER['REQUEST_URI'];
        $urlParts = explode('?', $httpUrl);
        $routeUrl = strtolower($urlParts[0] ? $urlParts[0] : $httpUrl);
        // remove /index.php (se estiver presente no URL)
        $idx = strpos($routeUrl, '/index.php');
        if ($idx || $idx === 0) {
            $routeUrl = substr($routeUrl, 0, $idx) . substr($routeUrl, $idx + 10, strlen($routeUrl) - $idx + 10);
        }
    }

    public static function invoke()
    {
        $http_method = "";
        $url_route = "";
        $className = "";
        $methodName = "";
        Route::extractInfoFromHttpRequest($http_method, $url_route);
        
        if (!array_key_exists($http_method . '::' . $url_route, Route::$arrayRoutes)) {
            http_response_code(404);
            die();
        }
        $controllerMethodStr = Route::$arrayRoutes[$http_method . '::' . $url_route];
        Route::extractControllerMethodStr($controllerMethodStr, $className, $methodName);

        // INVOKE:
        $className = 'controllers\\' . $className;
        $instance = new $className;
        return $instance->$methodName();
    }
}
