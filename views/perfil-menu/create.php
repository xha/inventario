<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pais */

$this->title = 'Crear Perfil-Menú';
$this->params['breadcrumbs'][] = ['label' => 'Paises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-menu-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'mensaje' => $mensaje,
    ]) ?>

</div>
