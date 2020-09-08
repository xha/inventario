<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\SwitchInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Marca */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marca-form">
	<h3 id="msj_principal"><?= $mensaje ?></h3>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activo')->widget(SwitchInput::classname(), [ 'pluginOptions' => ['onText' => 'Si','offText' => 'No']]) ?>

    <div class="form-group">
    	<?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Crear' : '<i class="fa fa-save"></i> Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript">
	$(function() {
        var msj_principal = $('#msj_principal').html();
        if (msj_principal!="") {
            oculta_mensaje('msj_principal',msj_principal);
        }
    });
</script>