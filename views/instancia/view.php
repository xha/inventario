<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Instancia */

$this->title = $model->idInstancia;
$this->params['breadcrumbs'][] = ['label' => 'Instancias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="instancia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa fa-save"></i> Actualizar', ['update', 'id' => $model->idInstancia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-times"></i> Desactivar', ['delete', 'id' => $model->idInstancia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Confirmar Desactivado',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idInstancia',
            'idPadre',
            'descripcion',
            //'fechaCreacion',
            'esServicio:boolean',
            'esCompuesto:boolean',
            'orden',
            //'idEmpresa',
            //'estado:boolean',
            'activo:boolean',
        ],
    ]) ?>

</div>
