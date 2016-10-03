<?php
/* @var $this VariedadController */
/* @var $model Variedad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'especie_id'); ?>
		<?php echo $form->textField($model,'especie_id'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad1'); ?>
		<?php echo $form->textField($model,'propiedad1'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad2'); ?>
		<?php echo $form->textField($model,'propiedad2'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad3'); ?>
		<?php echo $form->textField($model,'propiedad3'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad4'); ?>
		<?php echo $form->textField($model,'propiedad4'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad5'); ?>
		<?php echo $form->textField($model,'propiedad5'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad6'); ?>
		<?php echo $form->textField($model,'propiedad6'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad7'); ?>
		<?php echo $form->textField($model,'propiedad7'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad8'); ?>
		<?php echo $form->textField($model,'propiedad8'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad9'); ?>
		<?php echo $form->textField($model,'propiedad9'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad10'); ?>
		<?php echo $form->textField($model,'propiedad10'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad11'); ?>
		<?php echo $form->textField($model,'propiedad11'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad12'); ?>
		<?php echo $form->textField($model,'propiedad12'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad13'); ?>
		<?php echo $form->textField($model,'propiedad13'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad14'); ?>
		<?php echo $form->textField($model,'propiedad14'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad15'); ?>
		<?php echo $form->textField($model,'propiedad15'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad16'); ?>
		<?php echo $form->textField($model,'propiedad16'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'used_by'); ?>
		<?php echo $form->textField($model,'used_by'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'check_in'); ?>
		<?php echo $form->textField($model,'check_in'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'modified'); ?>
		<?php echo $form->textField($model,'modified'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Search',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->