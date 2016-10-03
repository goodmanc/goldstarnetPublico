<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Cliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Ver Cliente #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'rut',
		'nombre',
		'abrev',
		'propiedad1',
		'propiedad2',
		'propiedad3',
		'propiedad4',
		'propiedad5',
		'propiedad6',
		'propiedad7',
		'propiedad8',
		'propiedad9',
		'propiedad10',
		'propiedad11',
		'propiedad12',
		'propiedad13',
		'propiedad14',
		'propiedad15',
		'propiedad16',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
