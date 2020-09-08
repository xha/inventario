<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Impuesto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="impuesto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esRetencion')->checkbox() ?>

    <?= $form->field($model, 'esCompra')->checkbox() ?>

    <?= $form->field($model, 'esVenta')->checkbox() ?>

    <?= $form->field($model, 'esPorcentaje')->checkbox() ?>

    <?= $form->field($model, 'esLibroImpuesto')->checkbox() ?>

    <?= $form->field($model, 'fechaCreacion')->textInput() ?>

    <?= $form->field($model, 'idEmpresa')->textInput() ?>

    <?= $form->field($model, 'estado')->checkbox() ?>

    <?= $form->field($model, 'activo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
