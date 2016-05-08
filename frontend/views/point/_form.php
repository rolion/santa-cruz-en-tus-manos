<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Point */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="point-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'latitud') ?>

    <?= $form->field($model, 'longitud') ?>

    <?= $form->field($model, 'distrito') ?>

    <?= $form->field($model, 'manzana') ?>

    <?= $form->field($model, 'uv') ?>

    <?= $form->field($model, 'barrio') ?>

    <?= $form->field($model, 'direccion') ?>

    <?= $form->field($model, 'telefono') ?>

    <?= $form->field($model, 'numeropuerta') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'actividadeconomica') ?>

    <?= $form->field($model, 'type') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
