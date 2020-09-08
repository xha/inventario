<?php 
    $base = Yii::$app->request->baseUrl;
?>
    <!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
        <?php
            if (!Yii::$app->user->isGuest) {
        ?>
            <li class="sidebar-item">
                <a href="<?= $base."/site/login" ?>" class="sidebar-link">
                    <i class="fa fa-check"></i>
                    <span class="hide-menu"> Login </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="<?= $base."/site/recuperar" ?>" class="sidebar-link">
                    <i class="fa fa-unlock"></i>
                    <span class="hide-menu"> Recuperar Usuario </span>
                </a>
            </li>
        <?php
            } else {
        ?>
            <li class="sidebar-item">
                <a href="<?= $base."/site/" ?>" class="sidebar-link">
                    <i class="fa fa-dashboard"></i>
                    <span class="hide-menu"> Inicio </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="fa fa-star"></i>
                    <span class="hide-menu"> Configuración </span>
                </a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item">
                        <a href="<?= $base."/site/register" ?>" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Registrar Usuario </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= $base."/perfil-menu" ?>" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Perfil - Menú </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= $base."/usuario" ?>" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Usuario </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= $base."/site/recuperar" ?>" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Recuperar Usuario </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= $base."/site/activar" ?>" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Activar Usuario </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= $base."/site/cambiar" ?>" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Cambiar Clave </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="fa fa-folder-open"></i>
                    <span class="hide-menu"> Tablas Básicas </span>
                </a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item">
                        <a href="index.html" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Clientes </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index2.html" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Proveedores </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index3.html" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Categoría de Productos </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index3.html" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Productos </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index3.html" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Sucursales </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="fa fa-balance-scale"></i>
                    <span class="hide-menu"> Inventario </span>
                </a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item">
                        <a href="index.html" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Nota de Recepción </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index2.html" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Nota de Despacho </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="index3.html" class="sidebar-link">
                            <i class="fa fa-check"></i>
                            <span class="hide-menu"> Traslado </span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php 
            }
        ?>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->