<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\InstanciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instancias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instancia-index">

    <center>
        <?= Html::a('<i class="fa fa-plus"></i> Crear', ['create'], ['class' => 'btn btn-success mb-2']) ?>
    </center>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model, $index, $widget, $grid){
            if($model->activo == 0) return ['style' => 'background-color: #FADCAC'];
        },
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'idInstancia',
            'idPadre',
            'descripcion',
            //'fechaCreacion',
            'esServicio:boolean',
            //'esCompuesto:boolean',
            'orden',
            //'idEmpresa',
            //'estado:boolean',
            'activo:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
