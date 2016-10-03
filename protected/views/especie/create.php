<?php
/* @var $this EspecieController */
/* @var $model Especie */

$this->breadcrumbs=array(
	'Especies'=>array('index'),
	'Create',
);

/* 
$this->menu=array(
	array('label'=>'Listar Especie', 'url'=>array('index')),
	array('label'=>'Administrar Especie', 'url'=>array('admin')),
);
*/
?>

<h1>Crear Especie</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>