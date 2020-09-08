<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnidadMedidaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidad Medidas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidad-medida-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Unidad Medida', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idUnidadMedida',
            'descripcion',
            'abreviatura',
            'fechaCreacion',
            'idEmpresa',
            //'estado:boolean',
            //'activo:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
