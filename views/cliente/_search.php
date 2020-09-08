<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCliente') ?>

    <?= $form->field($model, 'razonSocial') ?>

    <?= $form->field($model, 'telefonoLocal') ?>

    <?= $form->field($model, 'telefonoCelular') ?>

    <?= $form->field($model, 'observacion') ?>

    <?php // echo $form->field($model, 'idTipoPersona') ?>

    <?php // echo $form->field($model, 'documento') ?>

    <?php // echo $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'idTipoSeniat') ?>

    <?php // echo $form->field($model, 'esCredito')->checkbox() ?>

    <?php // echo $form->field($model, 'limiteCredito') ?>

    <?php // echo $form->field($model, 'esTolerancia')->checkbox() ?>

    <?php // echo $form->field($model, 'diasTolerancia') ?>

    <?php // echo $form->field($model, 'esDescuento')->checkbox() ?>

    <?php // echo $form->field($model, 'esPorcentaje')->checkbox() ?>

    <?php // echo $form->field($model, 'descuento') ?>

    <?php // echo $form->field($model, 'esAgenteRetencion')->checkbox() ?>

    <?php // echo $form->field($model, 'idTipoRetencion') ?>

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
