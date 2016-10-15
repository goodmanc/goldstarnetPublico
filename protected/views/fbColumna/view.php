<?php
/* @var $this FbColumnaController */
/* @var $model FbColumna */

$this->breadcrumbs=array(
	'Fb Columnas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar FbColumna', 'url'=>array('index')),
	array('label'=>'Crear FbColumna', 'url'=>array('create')),
	array('label'=>'Actualizar FbColumna', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar FbColumna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar FbColumna', 'url'=>array('admin')),
);
?>

<h1>Ver FbColumna #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'fbGrupoColumna_id',
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
