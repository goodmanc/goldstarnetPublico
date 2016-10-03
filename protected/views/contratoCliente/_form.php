<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'temporada_id'); ?>
		<?php echo $form->textField($model,'temporada_id',array()); ?>
		<?php echo $form->error($model,'temporada_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array()); ?>
		<?php echo $form->error($model,'cliente_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'proyecto_id'); ?>
		<?php echo $form->textField($model,'proyecto_id',array('size'=>20,'maxlength'=>20),array()); ?>
		<?php echo $form->error($model,'proyecto_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array()); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'guarantee'); ?>
		<?php echo $form->textArea($model,'guarantee',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'guarantee'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'conditionsHeader'); ?>
		<?php echo $form->textArea($model,'conditionsHeader',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'conditionsHeader'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'conditionsFooter'); ?>
		<?php echo $form->textArea($model,'conditionsFooter',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'conditionsFooter'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'growerServices'); ?>
		<?php echo $form->textArea($model,'growerServices',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'growerServices'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'stockSeed'); ?>
		<?php echo $form->textArea($model,'stockSeed',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'stockSeed'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'productionReports'); ?>
		<?php echo $form->textArea($model,'productionReports',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'productionReports'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'shipments'); ?>
		<?php echo $form->textArea($model,'shipments',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'shipments'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'aditionalPhitosanitaryReq'); ?>
		<?php echo $form->textArea($model,'aditionalPhitosanitaryReq',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'aditionalPhitosanitaryReq'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'preShipmentsSeedSamples'); ?>
		<?php echo $form->textArea($model,'preShipmentsSeedSamples',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'preShipmentsSeedSamples'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'earlyTerminationBuyOut'); ?>
		<?php echo $form->textArea($model,'earlyTerminationBuyOut',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'earlyTerminationBuyOut'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'overProduction'); ?>
		<?php echo $form->textArea($model,'overProduction',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'overProduction'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'prices'); ?>
		<?php echo $form->textArea($model,'prices',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'prices'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'advancePayments'); ?>
		<?php echo $form->textArea($model,'advancePayments',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'advancePayments'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'paymentTerms'); ?>
		<?php echo $form->textArea($model,'paymentTerms',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'paymentTerms'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'confidentiality'); ?>
		<?php echo $form->textArea($model,'confidentiality',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'confidentiality'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'lotNumberAssignment'); ?>
		<?php echo $form->textArea($model,'lotNumberAssignment',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'lotNumberAssignment'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'arbitrationAndLaw'); ?>
		<?php echo $form->textArea($model,'arbitrationAndLaw',array('rows'=>6,'cols'=>50)); ?>
		<?php echo $form->error($model,'arbitrationAndLaw'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'buyerSigName'); ?>
		<?php echo $form->textField($model,'buyerSigName',array('size'=>50,'maxlength'=>50),array()); ?>
		<?php echo $form->error($model,'buyerSigName'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'growerSigName'); ?>
		<?php echo $form->textField($model,'growerSigName',array('size'=>50,'maxlength'=>50),array()); ?>
		<?php echo $form->error($model,'growerSigName'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1),array()); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'used_by'); ?>
		<?php echo $form->textField($model,'used_by',array()); ?>
		<?php echo $form->error($model,'used_by'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'check_in'); ?>
		<?php echo $form->textField($model,'check_in',array()); ?>
		<?php echo $form->error($model,'check_in'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array()); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created',array()); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by',array()); ?>
		<?php echo $form->error($model,'modified_by'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'modified'); ?>
		<?php echo $form->textField($model,'modified',array()); ?>
		<?php echo $form->error($model,'modified'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->