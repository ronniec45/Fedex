<?php
  /**
   *
   */
  class Cliente extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }
    //funcion para insertar un instructot
    function insertar($datos){
      //ACTIVE_RECORD > en CodeIgniter
      return $this->db->insert("cliente",$datos);
      //Inseccion sQL
    }
    //FUNCION PARA CONSULTAR INSTRUCTORES LINEAS DE CODIGOS NUEVOS
    function obtenerTodos(){
      $listadoClientes=$this->db->get("cliente");
      //VALIDAR PARA QUE NO DE ERRORES
      //SIEMPRE VALIDAR CON UN IF PARA QUE NO HAYA ERRORES
      if($listadoClientes->num_rows()>0) { // SI HAY DATOS
        return $listadoClientes->result();
      }else { // NO HAY DATOS
        return false;
      }
    }
    function obtenerTodos2(){
    $ListadosLugares2=$this->db->get("cliente");
    if ($ListadosLugares2->num_rows()>0){
        return $ListadosLugares2->result();
        }
        return false;
      }
    function borrar($id){
      //delete from instructor where id_ins=
      $this->db->where("id", $id);
      return $this->db->delete("cliente");
    }

  }//cierre de la funcion
 ?>
