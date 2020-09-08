<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Impuesto */

$this->title = 'Update Impuesto: ' . $model->idImpuesto;
$this->params['breadcrumbs'][] = ['label' => 'Impuestos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idImpuesto, 'url' => ['view', 'id' => $model->idImpuesto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="impuesto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
