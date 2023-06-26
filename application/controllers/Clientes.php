<?php

    class Clientes extends CI_Controller
    {
        function __construct()
        {
          parent::__construct();
          //Cargar modelo
          $this->load->model('Cliente');
           $this->load->model('Lugar2');
        }
    public function nuevo(){
      $this->load->view('header');
      $this->load->view('clientes/nuevo');
      $this->load->view('footer');
    }
    public function cliente (){
    $data["clientes2"]=$this->Cliente->obtenerTodos2();
      $this->load->view('header');
      $this->load->view('clientes/cliente',$data);
      $this->load->view('footer');
    }
    public function index(){
      $data['clientes']=$this->Cliente->obtenerTodos();
      $this->load->view('header');
      $this->load->view('clientes/index',$data);
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoCliente=array(
        "nombre"=>$this->input->post('nombre'),
        "direccion"=>$this->input->post('direccion'),
        "ciudad"=>$this->input->post('ciudad'),
        "provincia"=>$this->input->post('provincia'),
        "pais"=>$this->input->post('pais'),
        "telefono"=>$this->input->post('telefono'),
        "genero"=>$this->input->post('genero'),
        "latitud"=>$this->input->post('latitud'),
        "longitud"=>$this->input->post('longitud')
      );

      if($this->Cliente->insertar($datosNuevoCliente)){
        redirect('clientes/index');
      }else{
        echo "<h1>ERROR AL INSERTAR</h1>";
      }
    }
    //funcion para eliminar clientes
    public function eliminar($id){
      if ($this->Cliente->borrar($id)) {//invocando el modelo
    redirect('clientes/index');
  } else {
    echo "ERROR AL BORRAR ;) ";
  }

}
  }
  //cierre de la clase

 ?>
