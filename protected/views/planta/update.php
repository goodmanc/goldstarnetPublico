<?php
/* @var $this PlantaController */
/* @var $model Planta */

$this->breadcrumbs=array(
	'Plantas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Planta', 'url'=>array('index')),
	array('label'=>'Crear Planta', 'url'=>array('create')),
	array('label'=>'Ver Planta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Planta', 'url'=>array('admin')),
);
?>

<h1>Planta<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>