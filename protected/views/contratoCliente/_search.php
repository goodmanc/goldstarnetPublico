<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'temporada_id'); ?>
		<?php echo $form->textField($model,'temporada_id',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'proyecto_id'); ?>
		<?php echo $form->textField($model,'proyecto_id',array('size'=>20,'maxlength'=>20),array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'guarantee'); ?>
		<?php echo $form->textArea($model,'guarantee',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'conditionsHeader'); ?>
		<?php echo $form->textArea($model,'conditionsHeader',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'conditionsFooter'); ?>
		<?php echo $form->textArea($model,'conditionsFooter',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'growerServices'); ?>
		<?php echo $form->textArea($model,'growerServices',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'stockSeed'); ?>
		<?php echo $form->textArea($model,'stockSeed',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'productionReports'); ?>
		<?php echo $form->textArea($model,'productionReports',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'shipments'); ?>
		<?php echo $form->textArea($model,'shipments',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'aditionalPhitosanitaryReq'); ?>
		<?php echo $form->textArea($model,'aditionalPhitosanitaryReq',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'preShipmentsSeedSamples'); ?>
		<?php echo $form->textArea($model,'preShipmentsSeedSamples',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'earlyTerminationBuyOut'); ?>
		<?php echo $form->textArea($model,'earlyTerminationBuyOut',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'overProduction'); ?>
		<?php echo $form->textArea($model,'overProduction',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'prices'); ?>
		<?php echo $form->textArea($model,'prices',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'advancePayments'); ?>
		<?php echo $form->textArea($model,'advancePayments',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'paymentTerms'); ?>
		<?php echo $form->textArea($model,'paymentTerms',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'confidentiality'); ?>
		<?php echo $form->textArea($model,'confidentiality',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'lotNumberAssignment'); ?>
		<?php echo $form->textArea($model,'lotNumberAssignment',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'arbitrationAndLaw'); ?>
		<?php echo $form->textArea($model,'arbitrationAndLaw',array('rows'=>6,'cols'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'buyerSigName'); ?>
		<?php echo $form->textField($model,'buyerSigName',array('size'=>50,'maxlength'=>50),array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'growerSigName'); ?>
		<?php echo $form->textField($model,'growerSigName',array('size'=>50,'maxlength'=>50),array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1),array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'used_by'); ?>
		<?php echo $form->textField($model,'used_by',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'check_in'); ?>
		<?php echo $form->textField($model,'check_in',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'modified'); ?>
		<?php echo $form->textField($model,'modified',array()); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Search',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->