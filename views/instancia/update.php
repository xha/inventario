<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Instancia */

$this->title = 'Actualizar Instancia: ' . $model->idInstancia;
$this->params['breadcrumbs'][] = ['label' => 'Instancias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idInstancia, 'url' => ['view', 'id' => $model->idInstancia]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="instancia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'mensaje' => $mensaje,
    ]) ?>

</div>
