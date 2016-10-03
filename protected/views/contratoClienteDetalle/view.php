<?php
/* @var $this ContratoClienteDetalleController */
/* @var $model ContratoClienteDetalle */

$this->breadcrumbs=array(
	'Contrato Cliente Detalles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ContratoClienteDetalle', 'url'=>array('index')),
	array('label'=>'Crear ContratoClienteDetalle', 'url'=>array('create')),
	array('label'=>'Actualizar ContratoClienteDetalle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ContratoClienteDetalle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ContratoClienteDetalle', 'url'=>array('admin')),
);
?>

<h1>Ver ContratoClienteDetalle #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'oventa_id',
		'catalogo_id',
		'subNumCat',
		'nombreVariedad',
		'nombreExportacion',
		'baseRate',
		'hactares',
		'kgs',
		'moneda_id',
		'price',
		'lineTotal',
		'totalFrgn',
		'proyecto_id',
		'stockSeed',
		'proyect',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
