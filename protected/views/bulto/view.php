<?php
/* @var $this BultoController */
/* @var $model Bulto */

$this->breadcrumbs=array(
	'Bultos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Bulto', 'url'=>array('index')),
	array('label'=>'Crear Bulto', 'url'=>array('create')),
	array('label'=>'Actualizar Bulto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Bulto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Bulto', 'url'=>array('admin')),
);
?>

<h1>Ver Bulto #<?php echo $model->id; ?></h1>

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
