<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'razonSocial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefonoLocal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefonoCelular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idTipoPersona')->textInput() ?>

    <?= $form->field($model, 'documento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idTipoSeniat')->textInput() ?>

    <?= $form->field($model, 'representante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idTipoRetencion')->textInput() ?>

    <?= $form->field($model, 'porcentajeRetencionIVA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esRetencionIVA')->checkbox() ?>

    <?= $form->field($model, 'fechaCreacion')->textInput() ?>

    <?= $form->field($model, 'idEmpresa')->textInput() ?>

    <?= $form->field($model, 'estado')->checkbox() ?>

    <?= $form->field($model, 'activo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
