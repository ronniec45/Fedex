<?php

    class Productos extends CI_Controller
    {
        function __construct()
        {
          parent::__construct();
          //Cargar modelo
          $this->load->model('Producto');
           $this->load->model('Lugar4');
        }
    public function nuevo(){
      $this->load->view('header');
      $this->load->view('productos/nuevo');
      $this->load->view('footer');
    }
    public function producto (){
    $data["productos3"]=$this->Producto->obtenerTodos3();
      $this->load->view('header');
      $this->load->view('productos/producto',$data);
      $this->load->view('footer');
    }
    public function index(){
      $data['productos']=$this->Producto->obtenerTodos();
      $this->load->view('header');
      $this->load->view('productos/index',$data);
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoProducto=array(
        "nombre_pro"=>$this->input->post('nombre_pro'),
        "descripcion_pro"=>$this->input->post('descripcion_pro'),
        "precio_pro"=>$this->input->post('precio_pro'),
        "proveedor_pro"=>$this->input->post('proveedor_pro'),
        "um_pro"=>$this->input->post('um_pro'),
        "fecha_ingreso_pro"=>$this->input->post('fecha_ingreso_pro'),
        "latitud_pro"=>$this->input->post('latitud_pro'),
        "longitud_pro"=>$this->input->post('longitud_pro')
      );

      if($this->Producto->insertar($datosNuevoProducto)){
        redirect('productos/index');
      }else{
        echo "<h1>ERROR AL INSERTAR</h1>";
      }
    }
    //funcion para eliminar clientes
    public function eliminar($id_pro){
      if ($this->Producto->borrar($id_pro)) {//invocando el modelo
    redirect('productos/index');
  } else {
    echo "ERROR AL BORRAR ;) ";
  }

}
  }
  //cierre de la clase

 ?>
