<?php
/* @var $this PlantaController */
/* @var $model Planta */

$this->breadcrumbs=array(
	'Plantas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Planta', 'url'=>array('index')),
	array('label'=>'Crear Planta', 'url'=>array('create')),
	array('label'=>'Actualizar Planta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Planta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Planta', 'url'=>array('admin')),
);
?>

<h1>Ver Planta #<?php echo $model->id; ?></h1>

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
