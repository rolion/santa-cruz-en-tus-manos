<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Inmuheble */

$this->title = 'Create Inmuheble';
$this->params['breadcrumbs'][] = ['label' => 'Inmuhebles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inmuheble-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
