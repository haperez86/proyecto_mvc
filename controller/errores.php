<?php

class Errors extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la solicitud o no existe la página";
        $this->view->render('errores/index');
    }

    function render(){
        $this->view->render('errores/index');    
    }
}