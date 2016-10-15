<?php
/* @var $this BultoController */
/* @var $model Bulto */

$this->breadcrumbs=array(
	'Bultos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Bulto', 'url'=>array('index')),
	array('label'=>'Crear Bulto', 'url'=>array('create')),
	array('label'=>'Ver Bulto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Bulto', 'url'=>array('admin')),
);
?>

<h1>Bulto<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>