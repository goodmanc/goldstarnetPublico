<?php
/* @var $this PotreroController */
/* @var $model Potrero */

$this->breadcrumbs=array(
	'Potreros'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Potrero', 'url'=>array('index')),
	array('label'=>'Crear Potrero', 'url'=>array('create')),
	array('label'=>'Ver Potrero', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Potrero', 'url'=>array('admin')),
);
?>

<h1>Potrero<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>