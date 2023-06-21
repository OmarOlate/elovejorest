<?php
    require_once "./model/IndexModel.php";
    /**
     * Summary of Main
     */
    class Index extends Controller{
        /**
         * Summary of __construct
         */
        function __construct()
        {
            parent::__construct();
            require_once "./model/IndexModel.php";
            $this->view->render('index');
           // echo "<p> Controlador Main </p>";
        }
        //function saludo(){
            //echo "<p> Ejecutaste el metodo saludo </p>";
       // }
       public function index(){
        require_once "./model/IndexModel.php";
        $categorias = new Index_Model();
        $data["categorias"] = $categorias->get_categorias();
        $this->view->render('index');
       }
    }

?>