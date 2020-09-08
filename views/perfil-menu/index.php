<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perfil - Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-menu-index animated fadeInRight">

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

            'idPerfil',
            'idMenu',
            'esLector:boolean',
            'esEscritor:boolean',
            'esBorrador:boolean',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
