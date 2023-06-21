<?php
require_once 'controllers/error.php';
    class App{

        function __construct()
        {

            $url= $_GET['url'];

            $url = rtrim($url, '/');
            $url = explode('/', $url);


           // var_dump($url);
            $archivoController = 'controllers/' . $url[0] . '.php';

            if(file_exists($archivoController)){
                require_once $archivoController;
                $controllers = new $url[0];

                if(isset($url[1])){
                    $controllers->{$url[1]}();
                }
                
            }else{
                $controllers = new Error();
            }

            
        }
    }


?>