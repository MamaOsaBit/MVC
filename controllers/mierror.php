<?php

class Mierror extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error al cargar el recurso";
        $this->view->render('mierror/index');
        //echo "<p>Error al cargar el recurso</p>";

    }
}

?>