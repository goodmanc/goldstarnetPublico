<?php
/* @var $this ClienteContactoController */
/* @var $model ClienteContacto */

$this->breadcrumbs=array(
	'Cliente Contactos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar ClienteContacto', 'url'=>array('index')),
	array('label'=>'Crear ClienteContacto', 'url'=>array('create')),
	array('label'=>'Ver ClienteContacto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar ClienteContacto', 'url'=>array('admin')),
);
?>

<h1>Update ClienteContacto <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>