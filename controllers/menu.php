<?php
        require_once 'model/IndexModel.php';
    /**
     * Summary of Main
     */
    class Menu extends Controller{
        /**
         * Summary of __construct
         */
        function __construct()
        {
            parent::__construct();
            $this->view->render('menu');
           // echo "<p> Controlador Main </p>";
        }
        //function saludo(){
            //echo "<p> Ejecutaste el metodo saludo </p>";
       // }
       public function index(){
        $categorias = new Index_Model();
        $data["categorias"] = $categorias->get_categorias();
        $this->view->render('menu');
       }
    }


?>