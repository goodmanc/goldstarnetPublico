<?php
/* @var $this CondicionController */
/* @var $model Condicion */

$this->breadcrumbs=array(
	'Condicions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Condicion', 'url'=>array('index')),
	array('label'=>'Administrar Condicion', 'url'=>array('admin')),
);
?>

<h1>Crear Condicion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>