<? use frontend\assets\AppAsset;
AppAsset::register($this);
?>

<h1>Selección</h1>

<!-- panel izquierdo  -->

<div class="container-fluid">
  <div class="row content">

    <div class="col-sm-3 sidenav">
     	<h3>Servicio</h3>
      		<div class="checkbox">
      			<label><input type="checkbox">Compra</label><br>
      			<label><input type="checkbox">Alquiler</label><br>
      			<label><input type="checkbox">Anticretico</label><br>
    		</div>
    	<h3>Tipo de Inmueble</h3>
    		<div class="checkbox">
      			<label><input type="checkbox">Casa</label><br>
      			<label><input type="checkbox">Terreno</label><br>
      			<label><input type="checkbox">Apartamento</label><br>
      			<label><input type="checkbox">Departamento</label><br>
      			<label><input type="checkbox">Pieza</label><br>
      			<label><input type="checkbox">Negocio</label><br>
    		</div>

    	<button type="submit" class="btn btn-default">Buscar</button>

    </div>

    	<div id="map_container">
    		<div id="mapa">
    			<script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>

				<script type="text/javascript">
					//Namespace -> google.maps.ALGO

					var divMapa=document.getElementById('mapa');
					navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);
					function fn_ok( rta ){
						var lat=rta.coords.latitude;
						var lon=rta.coords.longitude;

						var gLatLon = new google.maps.LatLng(-17.7832186,-63.1820423)
						var objConfig = {
							zoom: 12,
							center: gLatLon
						} 
						var gMapa = new google.maps.Map(divMapa, objConfig);

						var objConigMarker = {
							position: gLatLon, 
							map: gMapa,
							title: "i'm here!"
						} 

						var gMarker = new google.maps.Marker(objConigMarker);
					}
					function fn_mal(){}



				</script>
    			
    		</div>

    		


    		


  </div>
</div>


















