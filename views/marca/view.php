<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Marca */

$this->title = $model->idMarca;
$this->params['breadcrumbs'][] = ['label' => 'Marcas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="marca-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa fa-save"></i> Actualizar', ['update', 'id' => $model->idMarca], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-times"></i> Desactivar', ['delete', 'id' => $model->idMarca], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Confirmar Desactivado',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idMarca',
            'descripcion',
            'activo:boolean',
        ],
    ]) ?>

</div>
