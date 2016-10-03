<?php
/* @var $this ClienteContactoController */
/* @var $model ClienteContacto */

$this->breadcrumbs=array(
	'Cliente Contactos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar ClienteContacto', 'url'=>array('index')),
	array('label'=>'Administrar ClienteContacto', 'url'=>array('admin')),
);
?>

<h1>Crear ClienteContacto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>