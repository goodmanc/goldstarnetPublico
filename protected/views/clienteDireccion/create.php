<?php
/* @var $this ClienteDireccionController */
/* @var $model ClienteDireccion */

$this->breadcrumbs=array(
	'Cliente Direccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar ClienteDireccion', 'url'=>array('index')),
	array('label'=>'Administrar ClienteDireccion', 'url'=>array('admin')),
);
?>

<h1>Crear ClienteDireccion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>