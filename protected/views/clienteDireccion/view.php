<?php
/* @var $this ClienteDireccionController */
/* @var $model ClienteDireccion */

$this->breadcrumbs=array(
	'Cliente Direccions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ClienteDireccion', 'url'=>array('index')),
	array('label'=>'Crear ClienteDireccion', 'url'=>array('create')),
	array('label'=>'Actualizar ClienteDireccion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ClienteDireccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ClienteDireccion', 'url'=>array('admin')),
);
?>

<h1>Ver ClienteDireccion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'cliente_id',
		'code',
		'calle',
		'poblacion',
		'ciudad',
		'pobox',
		'comuna',
		'pais_id',
		'ref1',
		'ref2',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
