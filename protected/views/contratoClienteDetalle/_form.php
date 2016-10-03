<?php
/* @var $this ContratoClienteDetalleController */
/* @var $model ContratoClienteDetalle */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-cliente-detalle-form',
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
		<?php echo $form->labelEx($model,'catalogo_id'); ?>
		<?php echo $form->textField($model,'catalogo_id'); ?>
		<?php echo $form->error($model,'catalogo_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'subNumCat'); ?>
		<?php echo $form->textField($model,'subNumCat',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'subNumCat'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombreVariedad'); ?>
		<?php echo $form->textField($model,'nombreVariedad',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nombreVariedad'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombreExportacion'); ?>
		<?php echo $form->textField($model,'nombreExportacion',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nombreExportacion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'baseRate'); ?>
		<?php echo $form->textField($model,'baseRate'); ?>
		<?php echo $form->error($model,'baseRate'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'hactares'); ?>
		<?php echo $form->textField($model,'hactares'); ?>
		<?php echo $form->error($model,'hactares'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'kgs'); ?>
		<?php echo $form->textField($model,'kgs'); ?>
		<?php echo $form->error($model,'kgs'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'moneda_id'); ?>
		<?php echo $form->textField($model,'moneda_id',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'moneda_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'lineTotal'); ?>
		<?php echo $form->textField($model,'lineTotal'); ?>
		<?php echo $form->error($model,'lineTotal'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'totalFrgn'); ?>
		<?php echo $form->textField($model,'totalFrgn'); ?>
		<?php echo $form->error($model,'totalFrgn'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'proyecto_id'); ?>
		<?php echo $form->textField($model,'proyecto_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'proyecto_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'stockSeed'); ?>
		<?php echo $form->textField($model,'stockSeed'); ?>
		<?php echo $form->error($model,'stockSeed'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'proyect'); ?>
		<?php echo $form->textField($model,'proyect',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'proyect'); ?>
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