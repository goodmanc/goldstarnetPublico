<?php
/* @var $this FbDatoController */
/* @var $model FbDato */

$this->breadcrumbs=array(
	'Fb Datos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar FbDato', 'url'=>array('index')),
	array('label'=>'Crear FbDato', 'url'=>array('create')),
	array('label'=>'Actualizar FbDato', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar FbDato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar FbDato', 'url'=>array('admin')),
);
?>

<h1>Ver FbDato #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'potrero_id',
		'fbColAsignada_id',
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
