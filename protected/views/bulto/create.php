<?php
/* @var $this BultoController */
/* @var $model Bulto */

$this->breadcrumbs=array(
	'Bultos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Bulto', 'url'=>array('index')),
	array('label'=>'Administrar Bulto', 'url'=>array('admin')),
);

?>

<h1>Bulto<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>