<?php
/* @var $this EspecieController */
/* @var $model Especie */

$this->breadcrumbs=array(
	'Especies'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Especie', 'url'=>array('index')),
	array('label'=>'Crear Especie', 'url'=>array('create')),
	array('label'=>'Ver Especie', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Especie', 'url'=>array('admin')),
);
?>

<h1>Update Especie <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>