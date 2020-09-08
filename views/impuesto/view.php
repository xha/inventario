<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Impuesto */

$this->title = $model->idImpuesto;
$this->params['breadcrumbs'][] = ['label' => 'Impuestos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="impuesto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idImpuesto], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idImpuesto], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idImpuesto',
            'descripcion',
            'monto',
            'esRetencion:boolean',
            'esCompra:boolean',
            'esVenta:boolean',
            'esPorcentaje:boolean',
            'esLibroImpuesto:boolean',
            'fechaCreacion',
            'idEmpresa',
            'estado:boolean',
            'activo:boolean',
        ],
    ]) ?>

</div>
