<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\InmuhebleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inmuebles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inmuheble-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Inmueble', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '_id',
            'nombre',
            'latitud',
            'longitud',
            'servicio',
            // 'tipo',
            // 'distrito',
            // 'uv',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
