<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idItem') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'idInstancia') ?>

    <?= $form->field($model, 'idMarca') ?>

    <?php // echo $form->field($model, 'idUnidadMedida') ?>

    <?php // echo $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'existencia') ?>

    <?php // echo $form->field($model, 'minimo') ?>

    <?php // echo $form->field($model, 'maximo') ?>

    <?php // echo $form->field($model, 'esExento')->checkbox() ?>

    <?php // echo $form->field($model, 'esServicio')->checkbox() ?>

    <?php // echo $form->field($model, 'ruta') ?>

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
