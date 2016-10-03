<?php
/* @var $this FamiliaController */
/* @var $model Familia */

$this->breadcrumbs=array(
	'Familias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Familia', 'url'=>array('index')),
	array('label'=>'Crear Familia', 'url'=>array('create')),
	array('label'=>'Ver Familia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Familia', 'url'=>array('admin')),
);
?>

<h1>Update Familia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form_inspinia', array('model'=>$model)); ?>