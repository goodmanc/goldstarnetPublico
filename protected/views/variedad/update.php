<?php
/* @var $this VariedadController */
/* @var $model Variedad */

$this->breadcrumbs=array(
	'Variedads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Variedad', 'url'=>array('index')),
	array('label'=>'Crear Variedad', 'url'=>array('create')),
	array('label'=>'Ver Variedad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Variedad', 'url'=>array('admin')),
);
?>

<h1>Update Variedad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>