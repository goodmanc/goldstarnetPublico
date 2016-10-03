<?php
/* @var $this CondicionesController */
/* @var $model Condiciones */

$this->breadcrumbs=array(
	'Condiciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Condiciones', 'url'=>array('index')),
	array('label'=>'Crear Condiciones', 'url'=>array('create')),
	array('label'=>'Actualizar Condiciones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Condiciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Condiciones', 'url'=>array('admin')),
);
?>

<h1>Ver Condiciones #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'oventa_id',
		'condicion_id',
		'valor',
		'prefix_copy1',
		'sufix',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
