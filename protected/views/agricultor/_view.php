<?php
/* @var $this AgricultorController */
/* @var $data Agricultor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razonSocial')); ?>:</b>
	<?php echo CHtml::encode($data->razonSocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad1')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad2')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad3')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad4')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad5')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad6')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad7')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad8')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad9')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad10')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad11')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad12')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad13')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad14')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad15')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad15); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propiedad16')); ?>:</b>
	<?php echo CHtml::encode($data->propiedad16); ?>
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