<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Marca */

$this->title = 'Actualizar Marca: ' . $model->idMarca;
$this->params['breadcrumbs'][] = ['label' => 'Marcas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idMarca, 'url' => ['view', 'id' => $model->idMarca]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="marca-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'mensaje' => $mensaje,
    ]) ?>

</div>
