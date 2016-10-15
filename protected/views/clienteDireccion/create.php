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

<h1>ClienteDireccion<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>