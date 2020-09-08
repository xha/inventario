<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vendedor */

$this->title = $model->idVendedor;
$this->params['breadcrumbs'][] = ['label' => 'Vendedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="vendedor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idVendedor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idVendedor], [
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
            'idVendedor',
            'razonSocial',
            'telefonoLocal',
            'telefonoCelular',
            'observacion',
            'documento',
            'correo',
            'fecha',
            'direccion',
            'esComisionVenta:boolean',
            'esComisionCobro:boolean',
            'esComisionTabuladorVenta:boolean',
            'esComisionTabuladorCobro:boolean',
            'fechaCreacion',
            'idEmpresa',
            'estado:boolean',
            'activo:boolean',
        ],
    ]) ?>

</div>
