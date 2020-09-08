<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImpuestoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="impuesto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idImpuesto') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'monto') ?>

    <?= $form->field($model, 'esRetencion')->checkbox() ?>

    <?= $form->field($model, 'esCompra')->checkbox() ?>

    <?php // echo $form->field($model, 'esVenta')->checkbox() ?>

    <?php // echo $form->field($model, 'esPorcentaje')->checkbox() ?>

    <?php // echo $form->field($model, 'esLibroImpuesto')->checkbox() ?>

    <?php // echo $form->field($model, 'fechaCreacion') ?>

    <?php // echo $form->field($model, 'idEmpresa') ?>

    <?php // echo $form->field($model, 'estado')->checkbox() ?>

    <?php // echo $form->field($model, 'activo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
