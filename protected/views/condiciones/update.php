<?php
/* @var $this CondicionesController */
/* @var $model Condiciones */

$this->breadcrumbs=array(
	'Condiciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Condiciones', 'url'=>array('index')),
	array('label'=>'Crear Condiciones', 'url'=>array('create')),
	array('label'=>'Ver Condiciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Condiciones', 'url'=>array('admin')),
);
?>

<h1>Update Condiciones <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>