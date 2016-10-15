<?php
/* @var $this ProcesoController */
/* @var $model Proceso */

$this->breadcrumbs=array(
	'Procesos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Proceso', 'url'=>array('index')),
	array('label'=>'Crear Proceso', 'url'=>array('create')),
	array('label'=>'Actualizar Proceso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Proceso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Proceso', 'url'=>array('admin')),
);
?>

<h1>Ver Proceso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'nombre',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
