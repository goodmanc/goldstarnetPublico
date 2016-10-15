<?php
/* @var $this FieldbookController */
/* @var $model Fieldbook */

$this->breadcrumbs=array(
	'Fieldbooks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Fieldbook', 'url'=>array('index')),
	array('label'=>'Crear Fieldbook', 'url'=>array('create')),
	array('label'=>'Actualizar Fieldbook', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Fieldbook', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Fieldbook', 'url'=>array('admin')),
);
?>

<h1>Ver Fieldbook #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'familia_id',
		'nombre',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
		'temporada_id',
	),
)); ?>
