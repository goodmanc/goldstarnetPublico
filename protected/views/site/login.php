<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
            <div>
                <img src="<?php echo YII::app()->baseUrl; ?>/images/logos/goldstar.png" width="400">
                <!--<h1 class="logo-name">GSN</h1>-->
            </div>
            <h3>Welcome to GSN</h3>
            <p>Please fill out the following form with your login credentials:</p>
 
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
    	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

            <!--<form class="m-t" role="form" action="index.html">-->
                <div class="form-group">
		
		<?php echo $form->textField($model,'username',array('class' => 'form-control', 'placeholder' => 'Username')); ?>
		<?php echo $form->error($model,'username'); ?>
                </div>
                <div class="form-group">
                    
		<?php echo $form->passwordField($model,'password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
                </div>
                <div class="form-group rememberMe">
                        <?php echo $form->checkBox($model,'rememberMe'); ?>
                        <?php echo $form->label($model,'rememberMe'); ?>
                        <?php echo $form->error($model,'rememberMe'); ?>
                </div>                
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>

<?php $this->endWidget(); ?>
