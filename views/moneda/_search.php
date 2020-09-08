<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MonedaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="moneda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idMoneda') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'simbolo') ?>

    <?= $form->field($model, 'principal')->checkbox() ?>

    <?= $form->field($model, 'fechaCreacion') ?>

    <?php // echo $form->field($model, 'estado')->checkbox() ?>

    <?php // echo $form->field($model, 'activo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
