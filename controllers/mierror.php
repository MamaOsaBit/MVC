<?php

class Mierror extends Controller{

    function __construct(){
        parent::__construct();
        echo "<p>Error al cargar el recurso</p>";
        $this->view = new view;
    }
}

?>