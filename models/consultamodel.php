<?php

include_once 'models/usuarios.php';

class ConsultaModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];
        
        try {

            $query = $this->db->connect()->query("SELECT * FROM usuarios");
            
            while ($row = $query->fetch()) {
                $item = new Alumno();
                $item->nombre = $row['nombre'];
                $item->telefono = $row['telefono'];
                $item->email = $row['email'];
                $item->idamigos = $row['idamigos'];

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
}