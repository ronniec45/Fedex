<?php

  class Pedido extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }
    //funcion para insertar un instructot
    function insertar($datos){
      //ACTIVE_RECORD > en CodeIgniter
      return $this->db->insert("pedido",$datos);
      //Inseccion sQL
    }
    //FUNCION PARA CONSULTAR INSTRUCTORES LINEAS DE CODIGOS NUEVOS
    function obtenerTodos(){
      $listadoPedidos=$this->db->get("pedido");
      //VALIDAR PARA QUE NO DE ERRORES
      //SIEMPRE VALIDAR CON UN IF PARA QUE NO HAYA ERRORES
      if($listadoPedidos->num_rows()>0) { // SI HAY DATOS
        return $listadoPedidos->result();
      }else { // NO HAY DATOS
        return false;
      }
    }
    function obtenerTodos3(){
    $ListadosLugares3=$this->db->get("pedido");
    if ($ListadosLugares3->num_rows()>0){
        return $ListadosLugares3->result();
        }
        return false;
      }
    function borrar($id_pe){
      //delete from instructor where id_ins=
      $this->db->where("id_pe", $id_pe);
      return $this->db->delete("pedido");
    }

  }//cierre de la funcion



 ?>
