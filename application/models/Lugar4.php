<?php
    class Lugar4 extends CI_Model{
        function __construct()
        {
            parent::__construct();
        }
        function obtenerTodos(){
            $ListadosLugares=$this->db->get("producto");
            if ($ListadosLugares->num_rows()>0){
                return $ListadosLugares->result();
            }
            return false;
        }
    }//cierre de la clase
?>
