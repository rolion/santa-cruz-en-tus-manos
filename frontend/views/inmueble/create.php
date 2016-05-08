<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Inmuheble */

$this->title = 'Create Inmueble';
$this->params['breadcrumbs'][] = ['label' => 'Inmuhebles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="col-sm-2 sidenav" style="float: left;">
	<div class="inmuheble-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<div id="mapa"> 	
    	
    	<script src="js/map.js"></script>
    	<script src="js/cargarMapa.js"></script>
    </div>

</div>

