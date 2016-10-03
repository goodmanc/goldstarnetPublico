<?php
/* @var $this ProyectoController */
/* @var $model Proyecto */

$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Proyecto', 'url'=>array('index')),
	array('label'=>'Crear Proyecto', 'url'=>array('create')),
	array('label'=>'Ver Proyecto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Proyecto', 'url'=>array('admin')),
);
?>

<h1>Update Proyecto <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>