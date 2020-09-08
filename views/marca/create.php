<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Marca */

$this->title = 'Crear Marca';
$this->params['breadcrumbs'][] = ['label' => 'Marcas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marca-create">

	<h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'mensaje' => $mensaje,
    ]) ?>

</div>
