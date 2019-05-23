<?php

class Registro extends Controller{

    function __construct(){
        parent::__construct();  
        $this->view->mensaje = "";
    }

    function render(){
        $this->view->render('registro/index');    
    }


    function registroUsuarios(){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $id_amigos = $_POST['id_amigos'];


        $mensaje = "";

        if($this->model->insert(['nombre' => $nombre, 'telefono' => $telefono, 'email' => $email, 'id_amigos' => $id_amigos]))
        {
            $mensaje = "Nuevo Usuario Creado";
        }
        
        $this->view->mensaje = $mensaje;
        $this->render();
    }
}