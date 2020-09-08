<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Instancia */

$this->title = 'Crear Instancia';
$this->params['breadcrumbs'][] = ['label' => 'Instancias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instancia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'mensaje' => $mensaje,
    ]) ?>

</div>
