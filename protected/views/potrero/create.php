<?php
/* @var $this PotreroController */
/* @var $model Potrero */

$this->breadcrumbs=array(
	'Potreros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Potrero', 'url'=>array('index')),
	array('label'=>'Administrar Potrero', 'url'=>array('admin')),
);

?>

<h1>Potrero<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>