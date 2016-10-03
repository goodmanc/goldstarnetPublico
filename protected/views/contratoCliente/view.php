<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */

$this->breadcrumbs=array(
	'Contrato Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ContratoCliente', 'url'=>array('index')),
	array('label'=>'Crear ContratoCliente', 'url'=>array('create')),
	array('label'=>'Actualizar ContratoCliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ContratoCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ContratoCliente', 'url'=>array('admin')),
);
?>

<h1>Ver ContratoCliente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'temporada_id',
		'cliente_id',
		'proyecto_id',
		'fecha',
		'observaciones',
		'guarantee',
		'conditionsHeader',
		'conditionsFooter',
		'growerServices',
		'stockSeed',
		'productionReports',
		'shipments',
		'aditionalPhitosanitaryReq',
		'preShipmentsSeedSamples',
		'earlyTerminationBuyOut',
		'overProduction',
		'prices',
		'advancePayments',
		'paymentTerms',
		'confidentiality',
		'lotNumberAssignment',
		'arbitrationAndLaw',
		'buyerSigName',
		'growerSigName',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
