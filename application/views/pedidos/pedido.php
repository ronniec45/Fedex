<br>
<br>
  <h1 class="text-center">DESTINO DE LOS PEDIDOS EN TODO EL MUNDO!.</h1>
  <br>
		<div class="row" >
			<div class="col-md-12">
				<div id="mapaPedido"style="height:500px; width:100%; border:4px solid black;"></div>
			</div>
		</div>
		<center><script type="text/javascript">
		 	function initMap(){
				var centro3=new google.maps.LatLng(-0.9286949294146735, -78.61625478124424);
				var mapaListaPedido3= new google.maps.Map(
					document.getElementById('mapaPedido'),
				{
					center:centro3,
					zoom:7,
					mapTypedId:google.maps.MapTypeId.HYBRID
				}
			); ///construir el mapa

			<?php if ($pedidos3): ?>
				<?php foreach ($pedidos3 as $lugarTemporal3):?>
				var coordenadaTemporal3= new google.maps.LatLng(<?php echo $lugarTemporal3->latitud_pe ?>, <?php echo $lugarTemporal3->longitud_pe ?>);
				//////////////MARCADOR
					var marcador3=new google.maps.Marker({
						position:coordenadaTemporal3,
						title:"<?php echo $lugarTemporal3->nombre_pe?>",
						map:mapaListaPedido3,
            icon:"<?php echo base_url('plantilla/assets/img/logo/logo3.png'); ?>"
					});
				<?php endforeach; ?>
				<?php endif; ?>
		} //cierre feuncion init map

		</script>
    <br>
    <br>
