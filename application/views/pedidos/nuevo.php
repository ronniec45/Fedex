<br>
<br>
<h1 style="text-align:center">NUEVO PRODUCTO</h1>
<br>
<br>
<form class="" action="<?php echo site_url(); ?>/productos/guardar" method="post">
  <div class="row">
    <div class="col-md-4">
        <label for="">Nombre:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Ingrese el nombre"
        class="form-control"
        required
        name="nombre_pe" value=""
        id="nombre_pe">
    </div>
    <div class="col-md-4">
        <label for="">Descripcion:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Ingrese una descripcion"
        class="form-control"
        required
        name="descripcion_pe" value=""
        id="descripcion_pe">
    </div>
    <div class="col-md-4">
      <label for="">Precio:</label>
      <span class="obligatorio">(Obligatorio)</span>
      <br>
      <input type="number"
      placeholder="Ingrese el precio"
      class="form-control"
      name="precio_pe" value=""
      id="precio_pe">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4">
        <label for="">Proveedor:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Ingrese el proveedor"
        class="form-control"
        required
        name="proveedor_pe" value=""
        id="proveedor_pe">
    </div>
    <div class="col-md-4">
        <label for="">UM:
        <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Ingrese la unidad de medida"
        class="form-control"
        required
        name="um_pe" value=""
        id="um_pe">
    </div>
    <div class="col-md-4">
        <label for="">Fecha de Ingreso:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Ingrese la fecha actual"
        class="form-control"
        required
        name="fecha_ingreso_pe" value=""
        id="fecha_ingreso_pe">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-6">
        <label for="">Latitud:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Seleccione en el mapa"
        class="form-control"  readonly
        required
        name="latitud_pe" value=""
        id="latitud_pe">
    </div>
    <div class="col-md-6">
        <label for="">Longitud:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Selecione en el mapa"
        class="form-control" readonly
        required
        name="longitud_pe" value=""
        id="longitud_pe">
    </div>
  </div>
    <br>
    <br>
    </div>
    <div class="row">
      <div class="col-md-12">
        <strong><h3 style="text-align:center">SELECCIONE SU DESTINO</h3></strong>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div id="mapaUbicacion" style="height:500px; width:100%;
        border:4px solid black;"></div>
      </div>
    </div>
  <!-- MAPA -->
    <script type="text/javascript">
      function initMap(){
        var centro=new google.maps.LatLng(-1.6641932288471328, -78.65904937250116);

        var mapa1=new google.maps.Map(
          document.getElementById('mapaUbicacion'),
          {
              center:centro,
              zoom:7,
              mapTypeId:google.maps.MapTypeId.ROADMAP
          }
        );
        var marcador=new google.maps.Marker({
          position:centro,
          map:mapa1,
          title:"Selecione su Ubicacion",
          draggable:true
        });
        google.maps.event.addListener(marcador,
        'dragend',function(){
          document.getElementById('latitud_pe').value=
          this.getPosition().lat();
          document.getElementById('longitud_pe').value=
          this.getPosition().lng();
        });

      }//cierre de la funcion initMap
    </script>
    <!-- BOTONES -->
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-success">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/pedidos/index" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<br>
<br>
