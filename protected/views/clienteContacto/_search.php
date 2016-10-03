<?php
/* @var $this ClienteContactoController */
/* @var $model ClienteContacto */
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
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'primerNombre'); ?>
		<?php echo $form->textField($model,'primerNombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'segundoNombre'); ?>
		<?php echo $form->textField($model,'segundoNombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'posision'); ?>
		<?php echo $form->textField($model,'posision',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tel1'); ?>
		<?php echo $form->textField($model,'tel1',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tel2'); ?>
		<?php echo $form->textField($model,'tel2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'movil'); ?>
		<?php echo $form->textField($model,'movil',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'notas1'); ?>
		<?php echo $form->textField($model,'notas1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'notas2'); ?>
		<?php echo $form->textField($model,'notas2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
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