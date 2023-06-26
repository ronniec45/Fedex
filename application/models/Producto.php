<?php

  class Producto extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }
    //funcion para insertar un instructot
    function insertar($datos){
      //ACTIVE_RECORD > en CodeIgniter
      return $this->db->insert("producto",$datos);
      //Inseccion sQL
    }
    //FUNCION PARA CONSULTAR INSTRUCTORES LINEAS DE CODIGOS NUEVOS
    function obtenerTodos(){
      $listadoProductos=$this->db->get("producto");
      //VALIDAR PARA QUE NO DE ERRORES
      //SIEMPRE VALIDAR CON UN IF PARA QUE NO HAYA ERRORES
      if($listadoProductos->num_rows()>0) { // SI HAY DATOS
        return $listadoProductos->result();
      }else { // NO HAY DATOS
        return false;
      }
    }
    function obtenerTodos3(){
    $ListadosLugares3=$this->db->get("producto");
    if ($ListadosLugares3->num_rows()>0){
        return $ListadosLugares3->result();
        }
        return false;
      }
    function borrar($id_pro){
      //delete from instructor where id_ins=
      $this->db->where("id_pro", $id_pro);
      return $this->db->delete("producto");
    }

  }//cierre de la funcion



 ?>
