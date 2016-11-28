<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->dropDownListRow($model, 'cliente_id', CHtml::listData(Cliente::model()->findAll(), 'id', Cliente::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'temporada_id'); ?>
		<?php echo $form->dropDownListRow($model, 'temporada_id', CHtml::listData(Temporada::model()->findAll(), 'id', Temporada::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'proyecto_id'); ?>
		<?php echo $form->dropDownListRow($model, 'proyecto_id', CHtml::listData(Proyecto::model()->findAll(), 'id', Proyecto::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->dateField($model, 'fecha', array('prepend'=>'<i class="icon-calendar"></i>')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textAreaRow($model,'observaciones',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'guarantee'); ?>
		<?php echo $form->textAreaRow($model,'guarantee',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'conditionsHeader'); ?>
		<?php echo $form->textAreaRow($model,'conditionsHeader',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'conditionsFooter'); ?>
		<?php echo $form->textAreaRow($model,'conditionsFooter',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'growerServices'); ?>
		<?php echo $form->textAreaRow($model,'growerServices',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'stockSeed'); ?>
		<?php echo $form->textAreaRow($model,'stockSeed',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'productionReports'); ?>
		<?php echo $form->textAreaRow($model,'productionReports',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'shipments'); ?>
		<?php echo $form->textAreaRow($model,'shipments',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'aditionalPhitosanitaryReq'); ?>
		<?php echo $form->textAreaRow($model,'aditionalPhitosanitaryReq',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'preShipmentsSeedSamples'); ?>
		<?php echo $form->textAreaRow($model,'preShipmentsSeedSamples',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'earlyTerminationBuyOut'); ?>
		<?php echo $form->textAreaRow($model,'earlyTerminationBuyOut',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'overProduction'); ?>
		<?php echo $form->textAreaRow($model,'overProduction',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'prices'); ?>
		<?php echo $form->textAreaRow($model,'prices',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'advancePayments'); ?>
		<?php echo $form->textAreaRow($model,'advancePayments',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'paymentTerms'); ?>
		<?php echo $form->textAreaRow($model,'paymentTerms',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'confidentiality'); ?>
		<?php echo $form->textAreaRow($model,'confidentiality',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'lotNumberAssignment'); ?>
		<?php echo $form->textAreaRow($model,'lotNumberAssignment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'arbitrationAndLaw'); ?>
		<?php echo $form->textAreaRow($model,'arbitrationAndLaw',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'buyerSigName'); ?>
		<?php echo $form->textFieldRow($model, 'buyerSigName', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'growerSigName'); ?>
		<?php echo $form->textFieldRow($model, 'growerSigName', array('class' => 'span5', 'maxlength' => 50)); ?>
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