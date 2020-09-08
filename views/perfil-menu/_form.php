<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Perfil;
use app\models\Menu;
use kartik\widgets\SwitchInput;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Pais */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-menu-form">
	<h3 id="msj_principal"><?= $mensaje ?></h3>

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-6 col-md-4">
    		<?= $form->field($model, 'idPerfil')->dropDownList(ArrayHelper::map(Perfil::find()->where(['activo' => 1])->OrderBy('descripcion')->all(), 
            'idPerfil', 'descripcion'), ['prompt' => 'Seleccione']); ?>    
        </div>
        <div class="col-sm-6 col-md-4">
    		<label>
    			Seleccionar Todos
	        </label>
	        <?= SwitchInput::widget([
		    		'name' => 'seleccionar_todos',
		            'id'=>'seleccionar', 
		            'value'=>false,
		            'pluginOptions' => [
		                'onColor' => 'primary',
		                'offColor' => 'danger',
		                'onText' => 'Si',
		                'offText' => 'No',
		                ],
		            'pluginEvents' => [
		                "switchChange.bootstrapSwitch" => "function() { seleccionar_todos(); }",
		            ],
		            ]) 
		        ?>
        </div>
    </div>

	<div id="div_accion" class="col-sm-12 mt-2"></div>
    <input id="i_items" name="i_items" type="hidden" />

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-save"></i> Crear' : '<i class="fa fa-save"></i> Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
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