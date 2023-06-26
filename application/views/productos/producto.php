<br>
<br>
  <h1 class="text-center">DESTINO DE LOS PAQUETES EN TODO EL MUNDO!.</h1>
  <br>
		<div class="row" >
			<div class="col-md-12">
				<div id="mapaProducto"style="height:500px; width:100%; border:4px solid black;"></div>
			</div>
		</div>
		<center><script type="text/javascript">
		 	function initMap(){
				var centro3=new google.maps.LatLng(-0.9286949294146735, -78.61625478124424);
				var mapaListaProducto3= new google.maps.Map(
					document.getElementById('mapaProducto'),
				{
					center:centro3,
					zoom:7,
					mapTypedId:google.maps.MapTypeId.HYBRID
				}
			); ///construir el mapa

			<?php if ($productos3): ?>
				<?php foreach ($productos3 as $lugarTemporal3):?>
				var coordenadaTemporal3= new google.maps.LatLng(<?php echo $lugarTemporal3->latitud_pro ?>, <?php echo $lugarTemporal3->longitud_pro ?>);
				//////////////MARCADOR
					var marcador3=new google.maps.Marker({
						position:coordenadaTemporal3,
						title:"<?php echo $lugarTemporal3->nombre_pro?>",
						map:mapaListaProducto3,
            icon:"<?php echo base_url('plantilla/assets/img/logo/logo3.png'); ?>"
					});
				<?php endforeach; ?>
				<?php endif; ?>
		} //cierre feuncion init map

		</script>
    <br>
    <br>
