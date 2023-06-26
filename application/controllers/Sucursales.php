<?php

    class Sucursales extends CI_Controller
    {
        function __construct()
        {
          parent::__construct();
          //Cargar modelo
          $this->load->model('Sucursal');
          $this->load->model('Lugar');
        }
    public function nuevo(){
      $this->load->view('header');
      $this->load->view('sucursales/nuevo');
      $this->load->view('footer');
    }
    public function sucursal (){
    $data["sucursales1"]=$this->Sucursal->obtenerTodos1();
      $this->load->view('header');
      $this->load->view('sucursales/sucursal',$data);
      $this->load->view('footer');
    }
    public function index(){
      $data['sucursales']=$this->Sucursal->obtenerTodos();
      $this->load->view('header');
      $this->load->view('sucursales/index',$data);
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevaSucursal=array(
        "nombre_su"=>$this->input->post('nombre_su'),
        "direccion_su"=>$this->input->post('direccion_su'),
        "ciudad_su"=>$this->input->post('ciudad_su'),
        "provincia_su"=>$this->input->post('provincia_su'),
        "pais_su"=>$this->input->post('pais_su'),
        "telefono_su"=>$this->input->post('telefono_su'),
        "email_su"=>$this->input->post('email_su'),
        "latitud_su"=>$this->input->post('latitud_su'),
        "longitud_su"=>$this->input->post('longitud_su')
      );

      if($this->Sucursal->insertar($datosNuevaSucursal)){
        redirect('sucursales/index');
      }else{
        echo "<h1>ERROR AL INSERTAR</h1>";
      }
    }
    //funcion para eliminar instructores
    public function eliminar($id_su){
      if ($this->Sucursal->borrar($id_su)) {//invocando el modelo
    redirect('sucursales/index');
  } else {
    echo "ERROR AL BORRAR ;) ";
  }

}
  }
  //cierre de la clase

 ?>
