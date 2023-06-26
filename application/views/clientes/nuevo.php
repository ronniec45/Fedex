<br>
<br>
<h1 style="text-align:center">REGISTRO DE UN CLIENTE.</h1>
<form class="" action="<?php echo site_url(); ?>/clientes/guardar" method="post">
  <div class="row">
        <div class="col-md-6">
          <div class="col-md-6 "> <label for>Genero:</label></div>
          <br>
            <div class="col-md-12">
            <select name="genero" class="form-control" placeholder="Ingrese" id="genero">
              <option class="text-center" value="presidente">---- Seleccione ----</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
            </select>
          </div>
        </div>
      </div>
      <br>
      <br>
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
        name="nombre" value=""
        id="nombre">
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
        name="direccion" value=""
        id="direccion">
    </div>
    <div class="col-md-4">
      <label for="">Ciudad:</label>
      <span class="obligatorio">(Obligatorio)</span>
      <br>
      <input type="text"
      placeholder="Ingrese su ciudad"
      class="form-control"
      name="ciudad" value=""
      id="ciudad">
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
        name="provincia" value=""
        id="provincia">
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
        name="pais" value=""
        id="pais">
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
      name="telefono" value=""
      id="telefono">
    </div>
  </div>
  <br>
  <div class="row" >
    <div class="col-md-6">
        <label for="">Latitud:
          <span class="obligatorio">(Obligatorio)</span>
        </label>
        <br>
        <input type="text"
        placeholder="Seleccione en el mapa"
        class="form-control"  readonly
        required
        name="latitud" value=""
        id="latitud">
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
        name="longitud" value=""
        id="longitud">
    </div>
  </div>
    <br>
    <br>
    </div>
    <div class="row">
      <div class="col-md-12">
        <strong><h3 style="text-align:center">SELECCIONE SU UBICACION</h3></strong>
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
          document.getElementById('latitud').value=
          this.getPosition().lat();
          document.getElementById('longitud').value=
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
            <a href="<?php echo site_url(); ?>/clientes/index" class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<br>
<br>
