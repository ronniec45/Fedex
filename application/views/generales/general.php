
<body style="color:white">
  <br>
  <h1 class="text-center">DESTINO A DONDE VIAJA EL PAQUETE.</h1>
  <br>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div id="mapaGeneral"style="height:500px; width:100%; border:2px solid black;"></div>
    </div>
  </div>
  <script type="text/javascript">
    function initMap(){
      var centro=new google.maps.LatLng(-0.9286949294146735, -78.61625478124424);
      var mapaListaGeneral= new google.maps.Map(
        document.getElementById('mapaGeneral'),
      {
        center:centro,
        zoom:3,
        mapTypedId:google.maps.MapTypeId.HYBRID
      }
    ); ///construir el mapa

    <?php if ($clientes2): ?>
      <?php foreach ($clientes2 as $lugarTemporal):?>
      var coordenadaTemporal= new google.maps.LatLng(<?php echo $lugarTemporal->latitud ?>, <?php echo $lugarTemporal->longitud ?>);
      //////////////MARCADOR
        var marcador=new google.maps.Marker({
          position:coordenadaTemporal,
          title:"<?php echo $lugarTemporal->nombre ?>",
          map:mapaListaGeneral,
          icon:"<?php echo base_url('plantilla/assets/img/logo/logo1.png'); ?>"

        });
      <?php endforeach; ?>
      <?php endif; ?>


      <?php if ($productos3): ?>
        <?php foreach ($productos3 as $lugarTemporal):?>
        var coordenadaTemporal= new google.maps.LatLng(<?php echo $lugarTemporal->latitud_pro ?>, <?php echo $lugarTemporal->longitud_pro ?>);
        //////////////MARCADOR
          var marcador=new google.maps.Marker({
            position:coordenadaTemporal,
            title:"<?php echo $lugarTemporal->nombre_pro?>",
            map:mapaListaGeneral,
              icon:"<?php echo base_url('plantilla/assets/img/logo/logo3.png'); ?>"

          });
        <?php endforeach; ?>
        <?php endif; ?>

  } //cierre feuncion init map

  </script>
  <br>
  <br>
