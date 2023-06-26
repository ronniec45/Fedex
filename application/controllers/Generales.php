<?php
class Generales extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        //cargar modelo
       $this->load->model('Producto');
       $this->load->model('Cliente');
       // $this->load->model('Lugar4');
       //
    }

    //funcion que renderiza general//
       public function general(){
      $data["clientes2"]=$this->Cliente->obtenerTodos2();
      $data["productos3"]=$this->Producto->obtenerTodos3();
       $this->load-> view('header');
       $this->load-> view('generales/general',$data);
       $this->load-> view('footer');
      }

}///cierre de la clase

?>
