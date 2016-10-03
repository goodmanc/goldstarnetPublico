<?php
/* @var $this TemporadaController */
/* @var $model Temporada */

$this->breadcrumbs=array(
	'Temporadas'=>array('index'),
	'Create',
);

/* 
$this->menu=array(
	array('label'=>'Listar Temporada', 'url'=>array('index')),
	array('label'=>'Administrar Temporada', 'url'=>array('admin')),
);
*/
?>

<h1>Crear Temporada</h1>

<?php $this->renderPartial('_form_inspinia', array('model'=>$model)); ?>