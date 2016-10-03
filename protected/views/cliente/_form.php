<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'abrev'); ?>
		<?php echo $form->textField($model,'abrev',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'abrev'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad1'); ?>
		<?php echo $form->textField($model,'propiedad1'); ?>
		<?php echo $form->error($model,'propiedad1'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad2'); ?>
		<?php echo $form->textField($model,'propiedad2'); ?>
		<?php echo $form->error($model,'propiedad2'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad3'); ?>
		<?php echo $form->textField($model,'propiedad3'); ?>
		<?php echo $form->error($model,'propiedad3'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad4'); ?>
		<?php echo $form->textField($model,'propiedad4'); ?>
		<?php echo $form->error($model,'propiedad4'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad5'); ?>
		<?php echo $form->textField($model,'propiedad5'); ?>
		<?php echo $form->error($model,'propiedad5'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad6'); ?>
		<?php echo $form->textField($model,'propiedad6'); ?>
		<?php echo $form->error($model,'propiedad6'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad7'); ?>
		<?php echo $form->textField($model,'propiedad7'); ?>
		<?php echo $form->error($model,'propiedad7'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad8'); ?>
		<?php echo $form->textField($model,'propiedad8'); ?>
		<?php echo $form->error($model,'propiedad8'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad9'); ?>
		<?php echo $form->textField($model,'propiedad9'); ?>
		<?php echo $form->error($model,'propiedad9'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad10'); ?>
		<?php echo $form->textField($model,'propiedad10'); ?>
		<?php echo $form->error($model,'propiedad10'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad11'); ?>
		<?php echo $form->textField($model,'propiedad11'); ?>
		<?php echo $form->error($model,'propiedad11'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad12'); ?>
		<?php echo $form->textField($model,'propiedad12'); ?>
		<?php echo $form->error($model,'propiedad12'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad13'); ?>
		<?php echo $form->textField($model,'propiedad13'); ?>
		<?php echo $form->error($model,'propiedad13'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad14'); ?>
		<?php echo $form->textField($model,'propiedad14'); ?>
		<?php echo $form->error($model,'propiedad14'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad15'); ?>
		<?php echo $form->textField($model,'propiedad15'); ?>
		<?php echo $form->error($model,'propiedad15'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propiedad16'); ?>
		<?php echo $form->textField($model,'propiedad16'); ?>
		<?php echo $form->error($model,'propiedad16'); ?>
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