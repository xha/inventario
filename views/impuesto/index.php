<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImpuestoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Impuestos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="impuesto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Impuesto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idImpuesto',
            'descripcion',
            'monto',
            'esRetencion:boolean',
            'esCompra:boolean',
            //'esVenta:boolean',
            //'esPorcentaje:boolean',
            //'esLibroImpuesto:boolean',
            //'fechaCreacion',
            //'idEmpresa',
            //'estado:boolean',
            //'activo:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
