<?php
/* @var $this FbReporteController */
/* @var $model FbReporte */

$this->breadcrumbs=array(
	'Fb Reportes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar FbReporte', 'url'=>array('index')),
	array('label'=>'Crear FbReporte', 'url'=>array('create')),
	array('label'=>'Actualizar FbReporte', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar FbReporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar FbReporte', 'url'=>array('admin')),
);
?>

<h1>Ver FbReporte #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'temporada_id',
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
