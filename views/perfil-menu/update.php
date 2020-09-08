<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pais */

$this->title = 'Actualizar País: ' . $model->idPais;
$this->params['breadcrumbs'][] = ['label' => 'Paises', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPais, 'url' => ['view', 'id' => $model->idPais]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="pais-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
