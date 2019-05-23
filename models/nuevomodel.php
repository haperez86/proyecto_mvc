<?php


class NuevoModel extends Model{
    public function __construct(){
        parent::__construct();
    }

        public function insert($datos){

        try{
            $query = $this->db->connect()->prepare('INSERT INTO USUARIOS (NOMBRE, TELEFONO, EMAIL, ID_AMIGOS) VALUES(:nombre, :telefono, :email, :id_amigos)');
            $query->execute(['nombre' => $datos['nombre'], 'telefono' => $datos['telefono'], 'email' => $datos['email'], 'id_amigos' => $datos['id_amigos']]);
            return true;
        }catch(PDOException $e){

            return false;
        }
    }

}   