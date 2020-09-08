<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VendedorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendedor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idVendedor') ?>

    <?= $form->field($model, 'razonSocial') ?>

    <?= $form->field($model, 'telefonoLocal') ?>

    <?= $form->field($model, 'telefonoCelular') ?>

    <?= $form->field($model, 'observacion') ?>

    <?php // echo $form->field($model, 'documento') ?>

    <?php // echo $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'esComisionVenta')->checkbox() ?>

    <?php // echo $form->field($model, 'esComisionCobro')->checkbox() ?>

    <?php // echo $form->field($model, 'esComisionTabuladorVenta')->checkbox() ?>

    <?php // echo $form->field($model, 'esComisionTabuladorCobro')->checkbox() ?>

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
