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

    <body style='overflow: auto;' class="top-navigation">

        <div id="wrapper">
            <div id="page-wrapper" class="gray-bg" style="min-height: 590px;">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <?php echo $content; ?>
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
