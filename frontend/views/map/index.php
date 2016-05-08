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
        <h3>Servicio</h3>
            <div class="checkbox">
                <label><input type="checkbox" name="servicio[]" id="servicio">Compra</label><br>
                <label><input type="checkbox" name="servicio[]" id="servicio">Alquiler</label><br>
                <label><input type="checkbox" name="servicio[]" id="servicio">Anticretico</label><br>
            </div>
        <h3>Tipo de Inmueble</h3>
            <div class="checkbox">
                <label><input type="checkbox" name="tinmueble[]" id="tinmueble">Casa</label><br>
                <label><input type="checkbox" name="tinmueble[]" id="tinmueble">Terreno</label><br>
                <label><input type="checkbox" name="tinmueble[]" id="tinmueble">Apartamento</label><br>
                <label><input type="checkbox" name="tinmueble[]" id="tinmueble">Departamento</label><br>
                <label><input type="checkbox" name="tinmueble[]" id="tinmueble">Pieza</label><br>
                <label><input type="checkbox" name="tinmueble[]" id="tinmueble">Negocio</label><br>
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