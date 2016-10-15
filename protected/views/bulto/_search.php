<?php
/* @var $this BultoController */
/* @var $model Bulto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5', 'maxlength' => 2)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textFieldRow($model, 'nombre', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 1)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'used_by'); ?>
		<?php echo $form->textFieldRow($model, 'used_by', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'check_in'); ?>
		<?php echo $form->textFieldRow($model, 'check_in', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textFieldRow($model, 'created_by', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textFieldRow($model, 'created', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'modified_by'); ?>
		<?php echo $form->textFieldRow($model, 'modified_by', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'modified'); ?>
		<?php echo $form->textFieldRow($model, 'modified', array('class' => 'span5')); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Search',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->