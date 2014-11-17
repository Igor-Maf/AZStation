<?php
class Bootstrap {
    public static function run(Request $r) {
        $controllerName = $r->getController() . 'Controller';
        $rootController = ROOT . 'controllers' . DS . $controllerName . '.php';
        $method = $r->getMethod();
        $args = $r->getArgs();
        
        if (is_readable($rootController)) {
            require_once $rootController;
            $controller = new $controllerName;
            
            if (is_callable(array($controller, $method))) {
                $method = $r->getMethod();
            } else {
                $method = 'index';
            }
            
            if (isset($args)) {
                call_user_func_array(array($controller, $method), $args);
            } else {
                call_user_func(array($controller, $method));
            }
        } else {
            throw new Exception($controllerName. ' is not found');
        }
    }
}