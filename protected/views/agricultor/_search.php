<?php
/* @var $this AgricultorController */
/* @var $model Agricultor */
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
		<?php echo $form->label($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>10,'maxlength'=>10),array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'razonSocial'); ?>
		<?php echo $form->textField($model,'razonSocial',array('size'=>60,'maxlength'=>100),array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100),array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50),array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>50,'maxlength'=>50),array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad1'); ?>
		<?php echo $form->textField($model,'propiedad1',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad2'); ?>
		<?php echo $form->textField($model,'propiedad2',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad3'); ?>
		<?php echo $form->textField($model,'propiedad3',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad4'); ?>
		<?php echo $form->textField($model,'propiedad4',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad5'); ?>
		<?php echo $form->textField($model,'propiedad5',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad6'); ?>
		<?php echo $form->textField($model,'propiedad6',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad7'); ?>
		<?php echo $form->textField($model,'propiedad7',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad8'); ?>
		<?php echo $form->textField($model,'propiedad8',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad9'); ?>
		<?php echo $form->textField($model,'propiedad9',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad10'); ?>
		<?php echo $form->textField($model,'propiedad10',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad11'); ?>
		<?php echo $form->textField($model,'propiedad11',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad12'); ?>
		<?php echo $form->textField($model,'propiedad12',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad13'); ?>
		<?php echo $form->textField($model,'propiedad13',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad14'); ?>
		<?php echo $form->textField($model,'propiedad14',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad15'); ?>
		<?php echo $form->textField($model,'propiedad15',array()); ?>
	</div>

	<div>
		<?php echo $form->label($model,'propiedad16'); ?>
		<?php echo $form->textField($model,'propiedad16',array()); ?>
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