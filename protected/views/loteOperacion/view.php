<?php
/* @var $this LoteOperacionController */
/* @var $model LoteOperacion */

$this->breadcrumbs=array(
	'Lote Operacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar LoteOperacion', 'url'=>array('index')),
	array('label'=>'Crear LoteOperacion', 'url'=>array('create')),
	array('label'=>'Actualizar LoteOperacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar LoteOperacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar LoteOperacion', 'url'=>array('admin')),
);
?>

<h1>Ver LoteOperacion #<?php echo $model->id; ?></h1>

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
