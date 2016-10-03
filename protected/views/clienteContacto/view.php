<?php
/* @var $this ClienteContactoController */
/* @var $model ClienteContacto */

$this->breadcrumbs=array(
	'Cliente Contactos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ClienteContacto', 'url'=>array('index')),
	array('label'=>'Crear ClienteContacto', 'url'=>array('create')),
	array('label'=>'Actualizar ClienteContacto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ClienteContacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ClienteContacto', 'url'=>array('admin')),
);
?>

<h1>Ver ClienteContacto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'cliente_id',
		'primerNombre',
		'segundoNombre',
		'apellidos',
		'titulo',
		'posision',
		'direccion',
		'tel1',
		'tel2',
		'movil',
		'fax',
		'notas1',
		'notas2',
		'email',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
