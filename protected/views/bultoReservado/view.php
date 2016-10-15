<?php
/* @var $this BultoReservadoController */
/* @var $model BultoReservado */

$this->breadcrumbs=array(
	'Bulto Reservados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar BultoReservado', 'url'=>array('index')),
	array('label'=>'Crear BultoReservado', 'url'=>array('create')),
	array('label'=>'Actualizar BultoReservado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar BultoReservado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar BultoReservado', 'url'=>array('admin')),
);
?>

<h1>Ver BultoReservado #<?php echo $model->id; ?></h1>

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
