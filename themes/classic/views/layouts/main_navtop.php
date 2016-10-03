<?php /* @var $this Controller */ ?>
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

        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="#" class="navbar-brand">GSN</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">

                      <?php 
                            $linkOptions = array('class'=>'dropdown-toggle','aria-expanded'=>'false','role'=>'button','data-toggle'=>'dropdown');
                            $linkOptions2 = array('class'=>'','aria-expanded'=>'false','role'=>'button','data-toggle'=>'');
                            $this->widget('application.components.MyMenu',array(
                           'activateItemsOuter'=>false,
                            'linkLabelWrapper' => 'span',
                            'activateItems' => true,
                            'activateParents' => true,
                            'itemTemplate' => '{menu}',
                            'id' => 'side-menu',
                             'items'=>array(
                                    array('label'=>'Rights', 'url'=>array('/rights'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
                                    array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
                                    array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
                                      array('label'=>'Inicio', 'itemOptions'=>array('class'=>''), 'linkOptions' => $linkOptions2, 'url'=>array('/site/index'), 'icon' => '<i class="fa fa-th-large"></i>'),
                                      array('label'=>'Formularios', 'itemOptions'=>array('class'=>'dropdown'), 'linkOptions' => $linkOptions, 'url'=>array('#'),'icon' => '<i class="fa fa-edit"></i>',
                                          'submenuHtmlOptions' => array('class' => 'dropdown-menu','role'=>'menu'),
                                          'items' => array(
                                            array('label'=>'Formulario Ejemplo', 'url'=>array('/site/page', 'view'=>'about')),
                                            array('label'=>'Especie', 'url'=>array('/especie/index'),
                                              'submenuHtmlOptions' => array('class' => 'dropdown-menu','role'=>'menu'),
                                                'items' => array(
                                                  array('label'=>'Formulario Ejemplo', 'itemOptions'=>array('class'=>'dropdown'), 'url'=>array('/site/page', 'view'=>'about2')),
                                                  array('label'=>'Especie', 'itemOptions'=>array('class'=>'dropdown'), 'url'=>array('/especie/index'))
                                                )),
                                          )
                                      ),
                                      array('label'=>'Contacto', 'itemOptions'=>array('class'=>'dropdown'), 'linkOptions' => $linkOptions2, 'url'=>array('/site/contact')),
                                      array('label'=>'Login', 'itemOptions'=>array('class'=>'dropdown'), 'linkOptions' => $linkOptions2, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                              ),
                              'htmlOptions'=>array('class'=>"nav navbar-nav")
                              
                            )); 
                            $this->widget('application.components.MyMenu',array(
                           'activateItemsOuter'=>false,
                            'linkLabelWrapper' => 'span',
                            'activateItems' => true,
                            'activateParents' => true,
                            'itemTemplate' => '{menu}',
                            'id' => 'side-menu',
                             'items'=>array(
                                    array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest, 'icon' => '<i class="fa fa-sign-out"></i>'),
                              ),
                              'htmlOptions'=>array('class'=>"nav navbar-top-links navbar-right")
                              
                      )); 
                            ?>                
<!--                     

                <ul class="nav navbar-nav">
                    <li class="active">
                        <a aria-expanded="false" role="button" href="layouts.html"> Back to main Layout page</a>
                    </li>
                    <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu item <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu item <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu item <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu item <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                            <li><a href="">Menu item</a></li>
                        </ul>
                    </li>

                </ul>

-->

              </div>
          </nav>

	<div id="page-wrapper" class="gray-bg" style="min-height: 590px;">
        <div class="wrapper wrapper-content animated fadeInRight">
            <?php echo $content; ?>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> GoldStar S.A. &copy; 2016-<?php echo date('Y'); ?>
            </div>
        </div>

    </div>
</div><!-- page -->


<!-- Mainly scripts -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.1.1.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/bootstrapTour/bootstrap-tour.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/summernote/summernote.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/clockpicker/clockpicker.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/inspinia.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins/pace/pace.min.js"></script>


</body>
</html>
