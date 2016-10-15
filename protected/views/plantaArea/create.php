<?php
/* @var $this PlantaAreaController */
/* @var $model PlantaArea */

$this->breadcrumbs=array(
	'Planta Areas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar PlantaArea', 'url'=>array('index')),
	array('label'=>'Administrar PlantaArea', 'url'=>array('admin')),
);

?>

<h1>PlantaArea<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>