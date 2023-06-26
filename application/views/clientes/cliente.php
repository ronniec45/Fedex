<br>
<br>
  <h1 class="text-center">DESTINO DE LOS PAQUETES EN TODO EL MUNDO!.</h1>
  <br>
		<div class="row" >
			<div class="col-md-12">
				<div id="mapaCliente"style="height:500px; width:100%; border:4px solid black;"></div>
			</div>
		</div>
		<center><script type="text/javascript">
		 	function initMap(){
				var centro2=new google.maps.LatLng(-0.9286949294146735, -78.61625478124424);
				var mapaListaCliente2= new google.maps.Map(
					document.getElementById('mapaCliente'),
				{
					center:centro2,
					zoom:7,
					mapTypedId:google.maps.MapTypeId.HYBRID
				}
			); ///construir el mapa

			<?php if ($clientes2): ?>
				<?php foreach ($clientes2 as $lugarTemporal2):?>
				var coordenadaTemporal2= new google.maps.LatLng(<?php echo $lugarTemporal2->latitud?>, <?php echo $lugarTemporal2->longitud?>);
				//////////////MARCADOR
					var marcador2=new google.maps.Marker({
						position:coordenadaTemporal2,
						title:"<?php echo  $lugarTemporal2->nombre?>",
						map:mapaListaCliente2,
            icon:"<?php echo base_url('plantilla/assets/img/logo/logo4.png'); ?>"
					});
				<?php endforeach; ?>
				<?php endif; ?>
		} //cierre feuncion init map

		</script>
    <br>
