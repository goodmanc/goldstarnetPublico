<?php
/* @var $this BultoHistoricoController */
/* @var $model BultoHistorico */

$this->breadcrumbs=array(
	'Bulto Historicos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar BultoHistorico', 'url'=>array('index')),
	array('label'=>'Crear BultoHistorico', 'url'=>array('create')),
	array('label'=>'Actualizar BultoHistorico', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar BultoHistorico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar BultoHistorico', 'url'=>array('admin')),
);
?>

<h1>Ver BultoHistorico #<?php echo $model->id; ?></h1>

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
