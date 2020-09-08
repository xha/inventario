<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Moneda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="moneda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'simbolo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'principal')->checkbox() ?>

    <?= $form->field($model, 'fechaCreacion')->textInput() ?>

    <?= $form->field($model, 'estado')->checkbox() ?>

    <?= $form->field($model, 'activo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
