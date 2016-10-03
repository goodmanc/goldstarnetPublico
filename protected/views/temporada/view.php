<?php
/* @var $this TemporadaController */
/* @var $model Temporada */

$this->breadcrumbs=array(
	'Temporadas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Temporada', 'url'=>array('index')),
	array('label'=>'Crear Temporada', 'url'=>array('create')),
	array('label'=>'Actualizar Temporada', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Temporada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Temporada', 'url'=>array('admin')),
);
?>

<h1>Ver Temporada #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'year',
		'periodo',
		'CANCELED',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
