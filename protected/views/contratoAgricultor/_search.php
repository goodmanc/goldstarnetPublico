<?php
/* @var $this ContratoAgricultorController */
/* @var $model ContratoAgricultor */
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
		<?php echo $form->label($model,'temporada_id'); ?>
		<?php echo $form->dropDownListRow($model, 'temporada_id', CHtml::listData(Temporada::model()->findAll(), 'id', Temporada::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'agricultor_id'); ?>
		<?php echo $form->dropDownListRow($model, 'agricultor_id', CHtml::listData(Agricultor::model()->findAll(), 'id', Agricultor::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'especie_id'); ?>
		<?php echo $form->dropDownListRow($model, 'especie_id', CHtml::listData(Especie::model()->findAll(), 'id', Especie::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'contratoclientedetalle_id'); ?>
		<?php echo $form->dropDownListRow($model, 'contratoclientedetalle_id', CHtml::listData(Contratoclientedetalle::model()->findAll(), 'id', Contratoclientedetalle::representingColumn()), array('prompt' => Yii::t('AweApp', 'None'))); ?>
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