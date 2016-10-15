<?php
/* @var $this FbGrupoColumnaController */
/* @var $model FbGrupoColumna */

$this->breadcrumbs=array(
	'Fb Grupo Columnas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar FbGrupoColumna', 'url'=>array('index')),
	array('label'=>'Crear FbGrupoColumna', 'url'=>array('create')),
	array('label'=>'Actualizar FbGrupoColumna', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar FbGrupoColumna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar FbGrupoColumna', 'url'=>array('admin')),
);
?>

<h1>Ver FbGrupoColumna #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'fbCategoria_id',
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
