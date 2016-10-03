<?php
/* @var $this ContratoClienteDetalleController */
/* @var $model ContratoClienteDetalle */
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
		<?php echo $form->label($model,'oventa_id'); ?>
		<?php echo $form->textField($model,'oventa_id'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'catalogo_id'); ?>
		<?php echo $form->textField($model,'catalogo_id'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'subNumCat'); ?>
		<?php echo $form->textField($model,'subNumCat',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombreVariedad'); ?>
		<?php echo $form->textField($model,'nombreVariedad',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombreExportacion'); ?>
		<?php echo $form->textField($model,'nombreExportacion',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'baseRate'); ?>
		<?php echo $form->textField($model,'baseRate'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'hactares'); ?>
		<?php echo $form->textField($model,'hactares'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'kgs'); ?>
		<?php echo $form->textField($model,'kgs'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'moneda_id'); ?>
		<?php echo $form->textField($model,'moneda_id',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'lineTotal'); ?>
		<?php echo $form->textField($model,'lineTotal'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'totalFrgn'); ?>
		<?php echo $form->textField($model,'totalFrgn'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'proyecto_id'); ?>
		<?php echo $form->textField($model,'proyecto_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'stockSeed'); ?>
		<?php echo $form->textField($model,'stockSeed'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'proyect'); ?>
		<?php echo $form->textField($model,'proyect',array('size'=>20,'maxlength'=>20)); ?>
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