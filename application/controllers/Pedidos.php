<?php

    class Pedidos extends CI_Controller
    {
        function __construct()
        {
          parent::__construct();
          //Cargar modelo
          $this->load->model('Pedido');
           $this->load->model('Lugar4');
        }
    public function nuevo(){
      $this->load->view('header');
      $this->load->view('pedidos/nuevo');
      $this->load->view('footer');
    }
    public function pedido (){
    $data["pedidos3"]=$this->Pedido->obtenerTodos3();
      $this->load->view('header');
      $this->load->view('pedidos/pedido',$data);
      $this->load->view('footer');
    }
    public function index(){
      $data['pedidos']=$this->Pedido->obtenerTodos();
      $this->load->view('header');
      $this->load->view('pedidos/index',$data);
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoPedido=array(
        "nombre_pe"=>$this->input->post('nombre_pe'),
        "descripcion_pe"=>$this->input->post('descripcion_pe'),
        "precio_pe"=>$this->input->post('precio_pe'),
        "proveedor_pe"=>$this->input->post('proveedor_pe'),
        "um_pe"=>$this->input->post('um_pe'),
        "fecha_ingreso_pe"=>$this->input->post('fecha_ingreso_pe'),
        "latitud_pe"=>$this->input->post('latitud_pe'),
        "longitud_pe"=>$this->input->post('longitud_pe')
      );

      if($this->Pedido->insertar($datosNuevoPedido)){
        redirect('pedidos/index');
      }else{
        echo "<h1>ERROR AL INSERTAR</h1>";
      }
    }
    //funcion para eliminar clientes
    public function eliminar($id_pe){
      if ($this->Pedido->borrar($id_pe)) {//invocando el modelo
    redirect('pedidos/index');
  } else {
    echo "ERROR AL BORRAR ;) ";
  }

}
  }
  //cierre de la clase

 ?>
