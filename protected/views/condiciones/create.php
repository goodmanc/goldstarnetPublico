<?php
/* @var $this CondicionesController */
/* @var $model Condiciones */

$this->breadcrumbs=array(
	'Condiciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Condiciones', 'url'=>array('index')),
	array('label'=>'Administrar Condiciones', 'url'=>array('admin')),
);
?>

<h1>Crear Condiciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>