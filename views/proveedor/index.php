<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProveedorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proveedors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Proveedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idProveedor',
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
            //'representante',
            //'idTipoRetencion',
            //'porcentajeRetencionIVA',
            //'esRetencionIVA:boolean',
            //'fechaCreacion',
            //'idEmpresa',
            //'estado:boolean',
            //'activo:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
