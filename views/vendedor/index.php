<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VendedorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendedors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendedor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Vendedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idVendedor',
            'razonSocial',
            'telefonoLocal',
            'telefonoCelular',
            'observacion',
            //'documento',
            //'correo',
            //'fecha',
            //'direccion',
            //'esComisionVenta:boolean',
            //'esComisionCobro:boolean',
            //'esComisionTabuladorVenta:boolean',
            //'esComisionTabuladorCobro:boolean',
            //'fechaCreacion',
            //'idEmpresa',
            //'estado:boolean',
            //'activo:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
