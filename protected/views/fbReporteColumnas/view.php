<?php
/* @var $this FbReporteColumnasController */
/* @var $model FbReporteColumnas */

$this->breadcrumbs=array(
	'Fb Reporte Columnases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar FbReporteColumnas', 'url'=>array('index')),
	array('label'=>'Crear FbReporteColumnas', 'url'=>array('create')),
	array('label'=>'Actualizar FbReporteColumnas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar FbReporteColumnas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar FbReporteColumnas', 'url'=>array('admin')),
);
?>

<h1>Ver FbReporteColumnas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'fbReporte_id',
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
