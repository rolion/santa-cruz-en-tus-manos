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
<?php $form = ActiveForm::begin(['id' => 'prueba-form']); ?>
	
	<div class="col-sm-2 sidenav" style="float: left;">
	    
	    <div class="panel panel-success">
      		<div class="panel-heading"><h4>Servicios</h4></div>
			    <div class="panel-body">			        
			        <div id="servicio" class="checkbox">
			            <label><input type="checkbox" name="servicio[]" value="Venta">Compra</label><br>
			            <label><input type="checkbox" name="servicio[]" value="Alquiler">Alquiler</label><br>
			            <label><input type="checkbox" name="servicio[]" value="Anticretico">Anticretico</label><br>
			        </div>
				</div>
    	</div>
    	<div class="panel panel-success">
      		<div class="panel-heading"><h4>Tipo de Inmueble</h4></div>
			    <div class="panel-body">			        
			        <div id='tipo' class="checkbox">
			            <label><input type="checkbox" name="tinmueble[]" value="Casa">Casa</label><br>
			            <label><input type="checkbox" name="tinmueble[]" value="Terreno">Terreno</label><br>
			            <label><input type="checkbox" name="tinmueble[]" value="Apartamento">Apartamento</label><br>
			            <label><input type="checkbox" name="tinmueble[]" value="Departamento">Departamento</label><br>
			            <label><input type="checkbox" name="tinmueble[]" value="Pieza">Pieza</label><br>
			            <label><input type="checkbox" name="tinmueble[]" value="Negocio">Negocio</label><br>
			        </div>			            
      			</div>
    	</div>
    	<input type="button" class="btn btn-success btn-md" onclick="cargarDatosMapa()" value="Buscar">
    </div>

<?php ActiveForm::end(); ?>

    <div id="mapa">
    	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    	<script src="js/map.js"></script>
    	<script src="js/cargarMapa.js"></script>
    </div>
  </body>
</html>