<br>
<br>
<h1 style="text-align:center">NUEVA SUCURSAL</h1>
<br>
<br>
<form class="" action="<?php echo site_url(); ?>/sucursales/guardar" method="post">
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
        name="nombre_su" value=""
        id="nombre_su">
    </div>
    <div class="col-md-4">
        <label for="">Dirreccion:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Ingrese la direccion"
        class="form-control"
        required
        name="direccion_su" value=""
        id="direccion_su">
    </div>
    <div class="col-md-4">
      <label for="">Ciudad:</label>
      <span class="obligatorio">(Obligatorio)</span>
      <br>
      <input type="text"
      placeholder="Ingrese su ciudad"
      class="form-control"
      name="ciudad_su" value=""
      id="ciudad_su">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4">
        <label for="">Provincia:
        <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Ingrese la provincia"
        class="form-control"
        required
        name="provincia_su" value=""
        id="provincia_su">
    </div>
    <div class="col-md-4">
        <label for="">Pais:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Ingrese el Pais"
        class="form-control"
        required
        name="pais_su" value=""
        id="pais_su">
    </div>
    <div class="col-md-4">
      <label for="">Teléfono:
        <span class="obligatorio">(Obligatorio)</span>
      </label>
      <br>
      <input type="number"
      placeholder="Ingrese el telefono"
      class="form-control"
      required
      name="telefono_su" value=""
      id="telefono_su">
    </div>
  </div>

  <br>
  <div class="row">
    <div class="col-md-4">
        <label for="">Email:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Ingrese el email"
        class="form-control"
        required
        name="email_su" value=""
        id="email_su">
    </div>
    <div class="col-md-4">
        <label for="">latitud:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Seleccione en el mapa"
        class="form-control"  readonly
        required
        name="latitud_su" value=""
        id="latitud_su">
    </div>
    <div class="col-md-4">
        <label for="">Longitud:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Selecione en el mapa"
        class="form-control" readonly
        required
        name="longitud_su" value=""
        id="longitud_su">
    </div>
  </div>
    <br>
    <br>
    </div>
    <div class="row">
      <div class="col-md-12">
        <strong><h3 style="text-align:center">SELECCIONE SU LOCALIDAD</h3></strong>
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
          document.getElementById('latitud_su').value=
          this.getPosition().lat();
          document.getElementById('longitud_su').value=
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
            <a href="<?php echo site_url(); ?>/sucursales/index" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<br>
<br>
