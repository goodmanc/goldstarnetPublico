<?php
/* @var $this LoteHistoricoController */
/* @var $model LoteHistorico */

$this->breadcrumbs=array(
	'Lote Historicos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar LoteHistorico', 'url'=>array('index')),
	array('label'=>'Crear LoteHistorico', 'url'=>array('create')),
	array('label'=>'Actualizar LoteHistorico', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar LoteHistorico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar LoteHistorico', 'url'=>array('admin')),
);
?>

<h1>Ver LoteHistorico #<?php echo $model->id; ?></h1>

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
