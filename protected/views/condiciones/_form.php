<?php
/* @var $this CondicionesController */
/* @var $model Condiciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'condiciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'oventa_id'); ?>
		<?php echo $form->textField($model,'oventa_id'); ?>
		<?php echo $form->error($model,'oventa_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'condicion_id'); ?>
		<?php echo $form->textField($model,'condicion_id'); ?>
		<?php echo $form->error($model,'condicion_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'prefix_copy1'); ?>
		<?php echo $form->textField($model,'prefix_copy1',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'prefix_copy1'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'sufix'); ?>
		<?php echo $form->textField($model,'sufix',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sufix'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'used_by'); ?>
		<?php echo $form->textField($model,'used_by'); ?>
		<?php echo $form->error($model,'used_by'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'check_in'); ?>
		<?php echo $form->textField($model,'check_in'); ?>
		<?php echo $form->error($model,'check_in'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by'); ?>
		<?php echo $form->error($model,'modified_by'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'modified'); ?>
		<?php echo $form->textField($model,'modified'); ?>
		<?php echo $form->error($model,'modified'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->