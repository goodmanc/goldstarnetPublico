<?php
/* @var $this FbColAsignadaController */
/* @var $model FbColAsignada */

$this->breadcrumbs=array(
	'Fb Col Asignadas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar FbColAsignada', 'url'=>array('index')),
	array('label'=>'Crear FbColAsignada', 'url'=>array('create')),
	array('label'=>'Actualizar FbColAsignada', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar FbColAsignada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar FbColAsignada', 'url'=>array('admin')),
);
?>

<h1>Ver FbColAsignada #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'fieldbook_id',
		'fbColumna_id',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
