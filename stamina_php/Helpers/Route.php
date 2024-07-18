<?php

class Route{
    static function urlParse(){

        if(isset($_GET['route'])){
            $routeParams = explode('/', $_GET['route']);

            if(count($routeParams) != 2){
                Route::error404();
                // echo 1;
                return 0;
            }
            $controllerName = $routeParams[0];
            $actionName = $routeParams[1];
            $controllerName = ucfirst($controllerName);

            if(!file_exists("Controllers/".$controllerName."Controller.php")){
                Route::error404();
                return 0;
            }
            require_once("Controllers/".$controllerName."Controller.php");

            if(!method_exists($controllerName."Controller", $actionName."Action")){
                Route::error404();
                return 0;
            }
            $class = $controllerName."Controller";
            $obj = new $class;
            $methodName = $actionName."Action";
            $obj -> $methodName();
        }
        else{
            include_once('Controllers/IndexController.php');
            $obj = new IndexController;
            $obj->indexAction();
        }
    }

    private static function error404(){
        echo "error 404";
    }
 
}
