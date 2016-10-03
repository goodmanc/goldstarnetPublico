<?php
/* @var $this ContratoClienteDetalleController */
/* @var $data ContratoClienteDetalle */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oventa_id')); ?>:</b>
	<?php echo CHtml::encode($data->oventa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catalogo_id')); ?>:</b>
	<?php echo CHtml::encode($data->catalogo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subNumCat')); ?>:</b>
	<?php echo CHtml::encode($data->subNumCat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreVariedad')); ?>:</b>
	<?php echo CHtml::encode($data->nombreVariedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreExportacion')); ?>:</b>
	<?php echo CHtml::encode($data->nombreExportacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baseRate')); ?>:</b>
	<?php echo CHtml::encode($data->baseRate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hactares')); ?>:</b>
	<?php echo CHtml::encode($data->hactares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kgs')); ?>:</b>
	<?php echo CHtml::encode($data->kgs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneda_id')); ?>:</b>
	<?php echo CHtml::encode($data->moneda_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lineTotal')); ?>:</b>
	<?php echo CHtml::encode($data->lineTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalFrgn')); ?>:</b>
	<?php echo CHtml::encode($data->totalFrgn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyecto_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyecto_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockSeed')); ?>:</b>
	<?php echo CHtml::encode($data->stockSeed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyect')); ?>:</b>
	<?php echo CHtml::encode($data->proyect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('used_by')); ?>:</b>
	<?php echo CHtml::encode($data->used_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_in')); ?>:</b>
	<?php echo CHtml::encode($data->check_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	*/ ?>

</div>