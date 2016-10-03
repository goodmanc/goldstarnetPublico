<?php
/* @var $this AgricultorController */
/* @var $model Agricultor */

$this->breadcrumbs=array(
	'Agricultors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Agricultor', 'url'=>array('index')),
	array('label'=>'Crear Agricultor', 'url'=>array('create')),
	array('label'=>'Ver Agricultor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Agricultor', 'url'=>array('admin')),
);
?>

<h1>Update Agricultor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form_inspinia', array('model'=>$model)); ?>