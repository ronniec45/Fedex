<br>
<br>
  <h1 class="text-center">LISTADO DE SUCURSALES EN TODO EL MUNDO.</h1>
  <br>
		<div class="row" >
			<div class="col-md-12">
				<div id="mapaSucursal"style="height:500px; width:100%; border:4px solid black;"></div>
			</div>
		</div>
		<center><script type="text/javascript">
		 	function initMap(){
				var centro1=new google.maps.LatLng(-0.9286949294146735, -78.61625478124424);
				var mapaListaSurcursal= new google.maps.Map(
					document.getElementById('mapaSucursal'),
				{
					center:centro1,
					zoom:7,
					mapTypedId:google.maps.MapTypeId.HYBRID
				}
			); ///construir el mapa

			<?php if ($sucursales1): ?>
				<?php foreach ($sucursales1 as $lugarTemporal1):?>
				var coordenadaTemporal1= new google.maps.LatLng(<?php echo $lugarTemporal1->latitud_su ?>, <?php echo $lugarTemporal1->longitud_su ?>);
				//////////////MARCADOR
					var marcador1=new google.maps.Marker({
						position:coordenadaTemporal1,
						title:"<?php echo $lugarTemporal1->nombre_su ?>",
						map:mapaListaSurcursal,
          	icon:"<?php echo base_url('plantilla/assets/img/logo/logo1.png'); ?>"
					});
				<?php endforeach; ?>
				<?php endif; ?>
		} //cierre feuncion init map

		</script>
    <br>
    <br>
