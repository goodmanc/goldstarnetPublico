<?php
/* @var $this TemporadaController */
/* @var $model Temporada */

$this->breadcrumbs=array(
	'Temporadas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Temporada', 'url'=>array('index')),
	array('label'=>'Crear Temporada', 'url'=>array('create')),
	array('label'=>'Ver Temporada', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Temporada', 'url'=>array('admin')),
);
?>

<h1>Update Temporada <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>