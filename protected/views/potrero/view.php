<?php
/* @var $this PotreroController */
/* @var $model Potrero */

$this->breadcrumbs=array(
	'Potreros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Potrero', 'url'=>array('index')),
	array('label'=>'Crear Potrero', 'url'=>array('create')),
	array('label'=>'Actualizar Potrero', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Potrero', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Potrero', 'url'=>array('admin')),
);
?>

<h1>Ver Potrero #<?php echo $model->id; ?></h1>

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
		'contratoAgricultor_id',
	),
)); ?>
