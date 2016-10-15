<?php
/* @var $this ContratoClienteDetalleController */
/* @var $model ContratoClienteDetalle */
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
		<?php echo $form->label($model,'oventa_id'); ?>
		<?php echo $form->dropDownListRow($model, 'oventa_id', CHtml::listData(Contratocliente::model()->findAll(), 'id', Contratocliente::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'catalogo_id'); ?>
		<?php echo $form->dropDownListRow($model, 'catalogo_id', CHtml::listData(Catalogo::model()->findAll(), 'id', Catalogo::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'subNumCat'); ?>
		<?php echo $form->textFieldRow($model, 'subNumCat', array('class' => 'span5', 'maxlength' => 30)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombreVariedad'); ?>
		<?php echo $form->textFieldRow($model, 'nombreVariedad', array('class' => 'span5', 'maxlength' => 40)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombreExportacion'); ?>
		<?php echo $form->textFieldRow($model, 'nombreExportacion', array('class' => 'span5', 'maxlength' => 40)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'baseRate'); ?>
		<?php echo $form->textFieldRow($model, 'baseRate', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'hactares'); ?>
		<?php echo $form->textFieldRow($model, 'hactares', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'kgs'); ?>
		<?php echo $form->textFieldRow($model, 'kgs', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'moneda_id'); ?>
		<?php echo $form->dropDownListRow($model, 'moneda_id', CHtml::listData(Moneda::model()->findAll(), 'id', Moneda::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textFieldRow($model, 'price', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'lineTotal'); ?>
		<?php echo $form->textFieldRow($model, 'lineTotal', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'totalFrgn'); ?>
		<?php echo $form->textFieldRow($model, 'totalFrgn', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'proyecto_id'); ?>
		<?php echo $form->dropDownListRow($model, 'proyecto_id', CHtml::listData(Proyecto::model()->findAll(), 'id', Proyecto::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'stockSeed'); ?>
		<?php echo $form->textFieldRow($model, 'stockSeed', array('class' => 'span5')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'proyect'); ?>
		<?php echo $form->textFieldRow($model, 'proyect', array('class' => 'span5', 'maxlength' => 20)); ?>
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