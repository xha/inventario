<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MarcaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Marcas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marca-index animated fadeInRight">

    <center>
        <?= Html::a('<i class="fa fa-plus"></i> Crear', ['create'], ['class' => 'btn btn-success mb-2']) ?>
    </center>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model, $index, $widget, $grid){
            if($model->activo == 0) return ['style' => 'background-color: #FADCAC'];
        },
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'idMarca',
            'descripcion',
            'activo:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
