<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

$this->breadcrumbs=array(
	'Ciudads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Ciudad', 'url'=>array('index')),
	array('label'=>'Crear Ciudad', 'url'=>array('create')),
	array('label'=>'Actualizar Ciudad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Ciudad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Ciudad', 'url'=>array('admin')),
);
?>

<h1>Ver Ciudad #<?php echo $model->id; ?></h1>

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
