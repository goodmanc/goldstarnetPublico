<?php
/* @var $this PlantaAreaController */
/* @var $model PlantaArea */

$this->breadcrumbs=array(
	'Planta Areas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar PlantaArea', 'url'=>array('index')),
	array('label'=>'Crear PlantaArea', 'url'=>array('create')),
	array('label'=>'Ver PlantaArea', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar PlantaArea', 'url'=>array('admin')),
);
?>

<h1>PlantaArea<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>