<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idInstancia')->textInput() ?>

    <?= $form->field($model, 'idMarca')->textInput() ?>

    <?= $form->field($model, 'idUnidadMedida')->textInput() ?>

    <?= $form->field($model, 'costo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'existencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minimo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maximo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esExento')->checkbox() ?>

    <?= $form->field($model, 'esServicio')->checkbox() ?>

    <?= $form->field($model, 'ruta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaCreacion')->textInput() ?>

    <?= $form->field($model, 'idEmpresa')->textInput() ?>

    <?= $form->field($model, 'estado')->checkbox() ?>

    <?= $form->field($model, 'activo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
