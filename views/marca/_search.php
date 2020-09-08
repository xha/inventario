<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MarcaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marca-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idMarca') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fechaCreacion') ?>

    <?= $form->field($model, 'idEmpresa') ?>

    <?= $form->field($model, 'estado')->checkbox() ?>

    <?php // echo $form->field($model, 'activo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
