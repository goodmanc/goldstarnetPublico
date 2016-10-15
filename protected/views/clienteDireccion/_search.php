<?php
/* @var $this ClienteDireccionController */
/* @var $model ClienteDireccion */
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
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textFieldRow($model, 'code', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'calle'); ?>
		<?php echo $form->textFieldRow($model, 'calle', array('class' => 'span5', 'maxlength' => 100)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'poblacion'); ?>
		<?php echo $form->textFieldRow($model, 'poblacion', array('class' => 'span5', 'maxlength' => 100)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'ciudad'); ?>
		<?php echo $form->textFieldRow($model, 'ciudad', array('class' => 'span5', 'maxlength' => 100)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'pobox'); ?>
		<?php echo $form->textFieldRow($model, 'pobox', array('class' => 'span5', 'maxlength' => 20)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'comuna'); ?>
		<?php echo $form->textFieldRow($model, 'comuna', array('class' => 'span5', 'maxlength' => 100)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'pais_id'); ?>
		<?php echo $form->dropDownListRow($model, 'pais_id', CHtml::listData(Pais::model()->findAll(), 'id', Pais::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'ref1'); ?>
		<?php echo $form->textFieldRow($model, 'ref1', array('class' => 'span5', 'maxlength' => 100)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'ref2'); ?>
		<?php echo $form->textFieldRow($model, 'ref2', array('class' => 'span5', 'maxlength' => 100)); ?>
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