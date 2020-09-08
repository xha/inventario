<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCliente',
            'razonSocial',
            'telefonoLocal',
            'telefonoCelular',
            'observacion',
            //'idTipoPersona',
            //'documento',
            //'correo',
            //'fecha',
            //'direccion',
            //'idTipoSeniat',
            //'esCredito:boolean',
            //'limiteCredito',
            //'esTolerancia:boolean',
            //'diasTolerancia',
            //'esDescuento:boolean',
            //'esPorcentaje:boolean',
            //'descuento',
            //'esAgenteRetencion:boolean',
            //'idTipoRetencion',
            //'fechaCreacion',
            //'idEmpresa',
            //'estado:boolean',
            //'activo:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
