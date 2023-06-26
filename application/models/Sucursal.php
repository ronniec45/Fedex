<?php
  /**
   *
   */
  class Sucursal extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }
    //funcion para insertar un instructot
    function insertar($datos){
      //ACTIVE_RECORD > en CodeIgniter
      return $this->db->insert("sucursal",$datos);
      //Inseccion sQL
    }
    //FUNCION PARA CONSULTAR INSTRUCTORES LINEAS DE CODIGOS NUEVOS
    function obtenerTodos(){
      $listadoSucursales=$this->db->get("sucursal");
      //VALIDAR PARA QUE NO DE ERRORES
      //SIEMPRE VALIDAR CON UN IF PARA QUE NO HAYA ERRORES
      if($listadoSucursales->num_rows()>0) { // SI HAY DATOS
        return $listadoSucursales->result();
      }else { // NO HAY DATOS
        return false;
      }
    }
    function obtenerTodos1(){
    $ListadosLugares1 =$this->db->get("sucursal");
    if ($ListadosLugares1->num_rows()>0){
        return $ListadosLugares1->result();
        }
        return false;
      }
    function borrar($id_su){
      //delete from instructor where id_ins=
      $this->db->where("id_su", $id_su);
      return $this->db->delete("sucursal");
    }

  }//cierre de la funcion



 ?>
