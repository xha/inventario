<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap4\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
if (Yii::$app->controller->action->id === 'login') { 
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php 
        $this->registerCssFile('@web/libs/datatables/datatables.min.css');
        $this->registerCssFile('@web/libs/datatables/dataTables.checkboxes.css');
        $this->registerCssFile('@web/libs/loading/jquery.loadingModal.css');
        $this->registerCssFile('@web/libs/sweetalert2/sweetalert.css');
        $this->registerCssFile('@web/libs/swiper/swiper.min.css'); 
        $this->registerCssFile('@web/libs/toastr/toastr.min.css'); 
        $this->registerCssFile('@web/libs/bootstrap-select/bootstrap-select.min.css'); 
        $this->registerCssFile('@web/libs/year-calendar/bootstrap-year-calendar.css'); 
        $this->registerCssFile('@web/libs/jstree/jstree.css');
        //HIGHCHARTS
        $this->registerJsFile('@web/libs/jquery/jquery-3.4.1.min.js');
        $this->registerJsFile('@web/libs/highcharts/highcharts.js');
        $this->registerJsFile('@web/libs/highcharts//modules/series-label.js');
        $this->registerJsFile('@web/libs/highcharts/modules/exporting.js');
        $this->registerJsFile('@web/libs/highcharts/modules/export-data.js');
    ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="main-wrapper" class="wrap">
    <!-- /#header -->
    <header class="topbar">
        <?= $this->render('header.php'); ?>
    </header>
    <!-- /#header -->
    
    <!-- /#left -->
    <aside class="left-sidebar">
        <?= $this->render('left.php'); ?>
    </aside>
    <!-- /#left -->

    <!-- /#content -->
    <div class="page-wrapper">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <div class="mx-3">
            <?= $content ?>    
        </div>        
    </div>
    <!-- /#content -->

    <!-- /#footer -->
    <footer class="footer text-center">
        <div class="container">
            <p class="pull-left">&copy; Inventario <?= date('Y') ?></p>
        </div>
    </footer>
    <!-- /#footer -->
</div>
<!-- /#right -->
<aside class="customizer p-2">
    <?= $this->render('right.php'); ?>
</aside>
<!-- /#right -->
<div class="chat-windows"></div>
<?php 
    $this->endBody();
    $this->registerJsFile('@web/libs/popper.js/dist/umd/popper.min.js');
    $this->registerJsFile('@web/libs/bootstrap/dist/js/bootstrap.min.js');
    $this->registerJsFile('@web/libs/bootstrap-datepicker/bootstrap-datepicker.min.js');
    $this->registerJsFile('@web/libs/bootstrap-datepicker/bootstrap-datepicker.es.min.js');
    $this->registerJsFile('@web/libs/datatables/datatables.min.js');
    $this->registerJsFile('@web/libs/datatables/dataTables.checkboxes.min.js');
    $this->registerJsFile('@web/libs/loading/jquery.loadingModal.js');
    $this->registerJsFile('@web/libs/sweetalert2/sweetalert.js');
    $this->registerJsFile('@web/js/general.js');
    $this->registerJsFile('@web/libs/swiper/swiper.min.js');
    $this->registerJsFile('@web/libs/toastr/toastr.min.js');
    $this->registerJsFile('@web/libs/bootstrap-select/bootstrap-select.js');
    $this->registerJsFile('@web/libs/year-calendar/bootstrap-year-calendar.js');
    $this->registerJsFile('@web/libs/year-calendar/bootstrap-year-calendar.es.js');
    $this->registerJsFile('@web/libs/sparkline/sparkline.js');
    $this->registerJsFile('@web/libs/jstree/jstree.js');
    $this->registerJsFile('@web/js/app.js');
    $this->registerJsFile('@web/js/app.init.js');
    $this->registerJsFile('@web/js/app-style-switcher.js');
    $this->registerJsFile('@web/js/perfect-scrollbar.jquery.min.js');
    $this->registerJsFile('@web/js/waves.js');
    $this->registerJsFile('@web/js/sidebarmenu.js');
    $this->registerJsFile('@web/js/custom.min.js');
    $this->registerJsFile('@web/js/site.js');
?>
</body>
</html>
<?php 
    $this->endPage();
}
?>
