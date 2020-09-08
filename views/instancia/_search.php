<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\InstanciaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instancia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idInstancia') ?>

    <?= $form->field($model, 'idPadre') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fechaCreacion') ?>

    <?= $form->field($model, 'esServicio')->checkbox() ?>

    <?php // echo $form->field($model, 'esCompuesto')->checkbox() ?>

    <?php // echo $form->field($model, 'orden') ?>

    <?php // echo $form->field($model, 'idEmpresa') ?>

    <?php // echo $form->field($model, 'estado')->checkbox() ?>

    <?php // echo $form->field($model, 'activo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
