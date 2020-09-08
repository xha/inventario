<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\SwitchInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Instancia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instancia-form">
    <h3 id="msj_principal"><?= $mensaje ?></h3>

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-12 col-md-4">
            <?= $form->field($model, 'descripcion')->textInput(['maxlength' => 200, "onkeypress" => "solo_alfanumericos(event)"]) ?>
        </div>

        <div class="col-sm-3 col-md-2">
            <?= $form->field($model, 'orden')->textInput(['maxlength' => 3, "onkeypress" => "solo_enteros(event)",]) ?>
        </div>

        <div class="col-sm-3 col-md-2">
            <?= $form->field($model, 'activo')->widget(SwitchInput::classname(), [ 'pluginOptions' => ['onText' => 'Si','offText' => 'No']]) ?>
        </div>

        <div class="col-sm-3 col-md-2">
            <?= $form->field($model, 'esServicio')->widget(SwitchInput::classname(), [ 'pluginOptions' => ['onText' => 'Si','offText' => 'No'], 'pluginEvents' => [
                            "switchChange.bootstrapSwitch" => "function() { traer_arbol(); }",
                        ],]) ?>
        </div>

        <div class="col-sm-3 col-md-2">
            <?= $form->field($model, 'esCompuesto')->widget(SwitchInput::classname(), [ 'pluginOptions' => ['onText' => 'Si','offText' => 'No']]) ?>
        </div>

        <div class="col-sm-4 col-md-2">
            <?= $form->field($model, 'idPadre')->textInput(['readonly' => true]) ?>
        </div>

        <div class="col-sm-4">
            <label>Descripción Padre</label>
            <input class="form-control" readonly="true" id="descripcion_padre"  id="descripcion_padre" placeholder="Vacio = Sin padre asignado" />
        </div>

        <div class="col-sm-2">
            <label>&nbsp;</label><br />
            <label class="btn btn-outline-secondary" onclick="limpiar_padre()">
                <i class="fa fa-times"></i>
                Limpiar
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4>Seleccione nivel padre (si aplica)</h4>
        </div>
        <div class="col-md-12" id="arbol"></div>
    </div>
    <hr />
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

        $('#arbol')
            .on("changed.jstree", function (e, data) {
                var valor = data.selected[0];
                var texto = data.instance.get_node(data.selected[0]).text;
                $("#instancia-idpadre").val(valor);
                $("#descripcion_padre").val(texto);
            })
            .jstree({
            core : {
                'data' : {
                    url: "busca-arbol?",
                    dataType : "json",
                    "data" : function (node) {
                        return { 
                            "id" : 0,
                            "esServicio" : $("#instancia-esservicio")[0].checked,
                        };
                    }
                }
            },
        });
    });

    function limpiar_padre() {
        $("#instancia-idpadre").val("");
        $("#descripcion_padre").val("");
    }

    function traer_arbol() {
        var esServicio = $("#instancia-esservicio")[0].checked;
        limpiar_padre();

        $('#arbol').jstree().refresh();
    }
</script>