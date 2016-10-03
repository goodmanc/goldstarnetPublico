<?php
/* @var $this ContratoClienteController */
/* @var $data ContratoCliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('temporada_id')); ?>:</b>
	<?php echo CHtml::encode($data->temporada_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyecto_id')); ?>:</b>
	<?php echo CHtml::encode($data->proyecto_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guarantee')); ?>:</b>
	<?php echo CHtml::encode($data->guarantee); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('conditionsHeader')); ?>:</b>
	<?php echo CHtml::encode($data->conditionsHeader); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conditionsFooter')); ?>:</b>
	<?php echo CHtml::encode($data->conditionsFooter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('growerServices')); ?>:</b>
	<?php echo CHtml::encode($data->growerServices); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stockSeed')); ?>:</b>
	<?php echo CHtml::encode($data->stockSeed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productionReports')); ?>:</b>
	<?php echo CHtml::encode($data->productionReports); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipments')); ?>:</b>
	<?php echo CHtml::encode($data->shipments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aditionalPhitosanitaryReq')); ?>:</b>
	<?php echo CHtml::encode($data->aditionalPhitosanitaryReq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preShipmentsSeedSamples')); ?>:</b>
	<?php echo CHtml::encode($data->preShipmentsSeedSamples); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earlyTerminationBuyOut')); ?>:</b>
	<?php echo CHtml::encode($data->earlyTerminationBuyOut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('overProduction')); ?>:</b>
	<?php echo CHtml::encode($data->overProduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prices')); ?>:</b>
	<?php echo CHtml::encode($data->prices); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('advancePayments')); ?>:</b>
	<?php echo CHtml::encode($data->advancePayments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentTerms')); ?>:</b>
	<?php echo CHtml::encode($data->paymentTerms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('confidentiality')); ?>:</b>
	<?php echo CHtml::encode($data->confidentiality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lotNumberAssignment')); ?>:</b>
	<?php echo CHtml::encode($data->lotNumberAssignment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arbitrationAndLaw')); ?>:</b>
	<?php echo CHtml::encode($data->arbitrationAndLaw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buyerSigName')); ?>:</b>
	<?php echo CHtml::encode($data->buyerSigName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('growerSigName')); ?>:</b>
	<?php echo CHtml::encode($data->growerSigName); ?>
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