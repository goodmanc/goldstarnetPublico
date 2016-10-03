<?php
/* @var $this ClienteDireccionController */
/* @var $model ClienteDireccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-direccion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id'); ?>
		<?php echo $form->error($model,'cliente_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'calle'); ?>
		<?php echo $form->textField($model,'calle',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'calle'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'poblacion'); ?>
		<?php echo $form->textField($model,'poblacion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'poblacion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'pobox'); ?>
		<?php echo $form->textField($model,'pobox',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pobox'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'comuna'); ?>
		<?php echo $form->textField($model,'comuna',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'comuna'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'pais_id'); ?>
		<?php echo $form->textField($model,'pais_id',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'pais_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ref1'); ?>
		<?php echo $form->textField($model,'ref1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ref1'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ref2'); ?>
		<?php echo $form->textField($model,'ref2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ref2'); ?>
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