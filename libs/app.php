<?php

require_once 'controllers/mierror.php';

class App{

    function __construct(){
        //echo "<p>Nueva app</p>";

        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            return false;
        }
        
        //var_dump($url);
        $archivoController = 'controllers/' . $url[0] . '.php';

        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];

            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }else{
            $controller = new Mierror();
        }
    }
}

?>