<?php

use yii\bootstrap\ActiveForm;

?>


<html lang="es">
  <head>
    <meta charset="UTF-8">
    <style type="text/css">
    #mapa { height: 500px; }
    </style>
    
  </head>
  <body>
  <h1>Selección</h1>

<!-- panel izquierdo  -->

<div class="container-fluid">
  <div class="row content">

		<?php $form = ActiveForm::begin(['id' => 'search-inmueble']); ?>
			
			<div class="col-sm-3 sidenav">
		        <h3>Servicio</h3>
		            <div id='servicio' class="checkbox">
		                <label><input type="checkbox" name="servicio[]" value="Venta" >Compra</label><br>
		                <label><input type="checkbox" name="servicio[]" value="Alquiler">Alquiler</label><br>
		                <label><input type="checkbox" name="servicio[]" value="Anticretico" >Anticretico</label><br>
		            </div>
		        <h3>Tipo de Inmueble</h3>
		            <div id='tipo' class="checkbox">
		                <label><input type="checkbox" name="tinmueble[]" value="Casa" >Casa</label><br>
		                <label><input type="checkbox" name="tinmueble[]" value="Terreno" >Terreno</label><br>
		                <label><input type="checkbox" name="tinmueble[]" value="Apartamento" >Apartamento</label><br>
		                <label><input type="checkbox" name="tinmueble[]" value="Departamento" >Departamento</label><br>
		                <label><input type="checkbox" name="tinmueble[]" value="Pieza" >Pieza</label><br>
		                <label><input type="checkbox" name="tinmueble[]" value="Negocio" >Negocio</label><br>
		            </div>

		            <input type="button" onclick="cargarDatosMapa()" value="Activar Función">


		    </div>

		<?php ActiveForm::end(); ?>


    <div id="mapa">
    	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    	<script src="js/map.js"></script>
    	<script src="js/cargarMapa.js"></script>
    </div>
  </body>
</html>