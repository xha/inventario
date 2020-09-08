<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadMedida */

$this->title = 'Update Unidad Medida: ' . $model->idUnidadMedida;
$this->params['breadcrumbs'][] = ['label' => 'Unidad Medidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idUnidadMedida, 'url' => ['view', 'id' => $model->idUnidadMedida]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidad-medida-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
