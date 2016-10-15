<?php
/* @var $this VariedadController */
/* @var $model Variedad */
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
		<?php echo $form->label($model,'especie_id'); ?>
		<?php echo $form->dropDownListRow($model, 'especie_id', CHtml::listData(Especie::model()->findAll(), 'id', Especie::representingColumn())); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textFieldRow($model, 'nombre', array('class' => 'span5', 'maxlength' => 50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad1'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad1'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad2'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad2'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad3'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad3'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad4'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad4'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad5'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad5'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad6'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad6'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad7'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad7'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad8'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad8'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad9'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad9'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad10'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad10'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad11'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad11'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad12'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad12'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad13'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad13'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad14'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad14'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad15'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad15'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad16'); ?>
		<?php echo $form->checkBoxRow($model, 'propiedad16'); ?>
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