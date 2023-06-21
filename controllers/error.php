<?php

    /**
     * Summary of Main
     */
    class Errors extends Controller{
        /**
         * Summary of __construct
         */
        function __construct()
        {
            parent::__construct();
            $this->view->render('error');
            echo "<p> Controlador Main </p>";
        }
        //function saludo(){
            //echo "<p> Ejecutaste el metodo saludo </p>";
       // }
    }
