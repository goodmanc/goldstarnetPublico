<?php /* @var $this Controller */ ?>
<?php 
$profile = User::model()->findByPk(Yii::app()->user->id)->profile;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <!-- blueprint CSS framework -->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">-->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">-->
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome/css/font-awesome.css">

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/dhtmlx_clouds/dhtmlx.css">


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body style='overflow: auto;' class='skin-3'>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                        <?php
                        $this->widget('application.components.MyMenu', array(
                            'activateItemsOuter' => true,
                            'linkLabelWrapper' => 'span',
                            'activateItems' => true,
                            'activateParents' => true,
                            'itemTemplate' => '{menu}',
                            'id' => 'side-menu',
                            'items' => array(
                                array('label' => '<div class="dropdown profile-element">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$profile->firstname.' '.$profile->lastname.'</strong>
                                        </span> <span class="text-muted text-xs block">'.$profile->position.'</span> </span> </a>
                                    </div>
                                    <div class="logo-element">
                                        GSNet
                                    </div>',
                                    'encodeLabel' => false, 'itemOptions' => array('class'=>'nav-header')),
                                array('label' => 'Inicio', 'url' => array('/site/index'), 'icon' => '<i class="fa fa-th-large"></i>'),
                                array('label' => 'Administración', 'url' => array('#'),
                                    'icon' => '<i class="fa fa-edit"></i>',
                                    'submenuHtmlOptions' => array('class' => 'nav nav-second-level collapse'),
                                    'items' => array(
                                        array('label' => 'General', 'url' => array('/especie/index'),
                                            'submenuHtmlOptions' => array('class' => 'nav nav-third-level collapse'),
                                            'items' => array(
                                                array('label' => 'Temporadas', 'url' => array('/temporada/index')),
                                                array('label' => 'Monedas', 'url' => array('/moneda/index')),
                                                array('label' => 'Especies', 'url' => array('#'),
                                                    'submenuHtmlOptions' => array('class' => 'nav nav-third-level collapse'),
                                                    'items' => array(
                                                        array('label' => 'Listado', 'url' => array('/especie/index')),
                                                        array('label' => 'Admin', 'url' => array('/especie/admin')),
                                                    )),
                                                array('label' => 'Familias', 'url' => array('/familia/index')),
                                            )),
                                    )
                                ),
                                array('label' => 'Clientes', 'url' => array('#'),
                                    'icon' => '<i class="fa fa-edit"></i>',
                                    'submenuHtmlOptions' => array('class' => 'nav nav-second-level collapse'),
                                    'items' => array(
                                        array('label' => 'Administración', 'url' => array('/cliente/index')),
                                        array('label' => 'Contratos', 'url' => array('/contratocliente/index')),
                                    )
                                ),
                                array('label' => 'Agricultores', 'url' => array('#'),
                                    'icon' => '<i class="fa fa-edit"></i>',
                                    'submenuHtmlOptions' => array('class' => 'nav nav-second-level collapse'),
                                    'items' => array(
                                        array('label' => 'Administración', 'url' => array('/agricultor/index')),
                                        array('label' => 'Contratos', 'url' => array('/contratoagricultor/index')),
                                    )
                                ),
                                array('label' => 'Otro', 'url' => array('#'),
                                    'icon' => '<i class="fa fa-edit"></i>',
                                    'submenuHtmlOptions' => array('class' => 'nav nav-second-level collapse'),
                                    'items' => array(
                                        array('label' => 'Formulario Ejemplo', 'url' => array('/site/page', 'view' => 'about')),
                                        array('label' => 'Especie', 'url' => array('/especie/index'),
                                            'submenuHtmlOptions' => array('class' => 'nav nav-third-level collapse'),
                                            'items' => array(
                                                array('label' => 'Formulario Ejemplo', 'url' => array('/site/page', 'view' => 'about2')),
                                                array('label' => 'Especie', 'url' => array('/especie/index'))
                                            )),
                                    )
                                ),
                                /* array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest), */
                                /* array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest), */
                                array('label' => 'Rights', 'url' => array('/rights'), 'visible' => !Yii::app()->user->isGuest),
                                array('url' => Yii::app()->getModule('user')->loginUrl, 'label' => Yii::app()->getModule('user')->t("Login"), 'visible' => Yii::app()->user->isGuest),
                                array('url' => Yii::app()->getModule('user')->registrationUrl, 'label' => Yii::app()->getModule('user')->t("Register"), 'visible' => Yii::app()->user->isGuest),
                                array('url' => Yii::app()->getModule('user')->profileUrl, 'label' => Yii::app()->getModule('user')->t("Profile"), 'visible' => !Yii::app()->user->isGuest),
//                                array('url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout") . ' (' . Yii::app()->user->name . ')', 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
//                                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                            ),
                            'htmlOptions' => array('class' => "nav metismenu")
                        ));
                        ?>                
                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg" style="min-height: 609px;">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                            <form role="search" class="navbar-form-custom" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" placeholder="Buscar..." class="form-control" name="top-search" id="top-search">
                                </div>
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>
                            </li>
                        </ul>

                    </nav>
                </div>
                <div class="wrapper wrapper-content animated fadeInRight">
                    <?php echo $content; ?>
                </div>
                <div class="footer">
                    <div class="pull-right">
                        20GB of <strong>250GB</strong> Free.
                    </div>
                    <div>
                        <strong>Copyright</strong> GoldStar S.A. &copy; 2016-<?php echo date('Y'); ?>
                    </div>
                </div>
            </div>
        </div><!-- page -->


        <!-- Mainly scripts -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/jquery-ui/jquery-ui.js"></script>-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/bootstrapTour/bootstrap-tour.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/summernote/summernote.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/clockpicker/clockpicker.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/inspinia.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/pace/pace.min.js"></script>

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/dhtmlx.js"></script>
    </body>
</html>
