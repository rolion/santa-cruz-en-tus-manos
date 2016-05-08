<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model frontend\models\Inmuheble */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inmuheble-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'latitud') ?>

    <?= $form->field($model, 'longitud') ?>

    <?= // Normal select with ActiveForm & model
         $form->field($model, 'servicio')->widget(Select2::classname(), [
            'data' => ['Venta'=>'Venta','Alquiler'=>'Alquiler','Anticretico'=>'Anticretico'],
            'language' => 'de',
            'options' => ['placeholder' => 'Distrito'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= // Normal select with ActiveForm & model
         $form->field($model, 'tipo')->widget(Select2::classname(), [
            'data' => ['Casa'=>'Casa','Departamento'=>'Departamento','Cuarto'=>'Cuarto','terreno'=>'terreno','Negocio'=>'Negocio','Edificio'=>'Edificio'],
            'language' => 'de',
            'options' => ['placeholder' => 'Distrito'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= // Normal select with ActiveForm & model
         $form->field($model, 'distrito')->widget(Select2::classname(), [
            'data' => ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'],
            'language' => 'de',
            'options' => ['placeholder' => 'Distrito'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= // Normal select with ActiveForm & model
         $form->field($model, 'uv')->widget(Select2::classname(), [
            'data' => ['uv-1'=>'uv-1','uv-2'=>'uv-2','uv-3'=>'uv-3','uv-4'=>'uv-4','uv-5'=>'uv-5','uv-6'=>'uv-6','uv-7'=>'uv-7','uv-8'=>'uv-8','uv-9'=>'uv-9','uv-10'=>'uv-10','uv-11'=>'uv-11','uv-12'=>'uv-12'],
            'language' => 'de',
            'options' => ['placeholder' => 'Unida Vecinal'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
