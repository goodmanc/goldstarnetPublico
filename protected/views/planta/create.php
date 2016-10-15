<?php
/* @var $this PlantaController */
/* @var $model Planta */

$this->breadcrumbs=array(
	'Plantas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Planta', 'url'=>array('index')),
	array('label'=>'Administrar Planta', 'url'=>array('admin')),
);

?>

<h1>Planta<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>