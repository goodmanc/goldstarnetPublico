<?php
/* @var $this ClienteContactoController */
/* @var $model ClienteContacto */
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
		<?php echo $form->label($model,'primerNombre'); ?>
		<?php echo $form->textFieldRow($model, 'primerNombre', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'segundoNombre'); ?>
		<?php echo $form->textFieldRow($model, 'segundoNombre', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'apellidos'); ?>
		<?php echo $form->textFieldRow($model, 'apellidos', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textFieldRow($model, 'titulo', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'posision'); ?>
		<?php echo $form->textFieldRow($model, 'posision', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textFieldRow($model, 'direccion', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tel1'); ?>
		<?php echo $form->textFieldRow($model, 'tel1', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tel2'); ?>
		<?php echo $form->textFieldRow($model, 'tel2', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'movil'); ?>
		<?php echo $form->textFieldRow($model, 'movil', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fax'); ?>
		<?php echo $form->textFieldRow($model, 'fax', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'notas1'); ?>
		<?php echo $form->textFieldRow($model, 'notas1', array('class' => 'span5', 'maxlength' => 100)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'notas2'); ?>
		<?php echo $form->textFieldRow($model, 'notas2', array('class' => 'span5', 'maxlength' => 100)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 50)); ?>
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