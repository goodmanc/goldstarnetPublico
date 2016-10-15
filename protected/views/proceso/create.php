<?php
/* @var $this ProcesoController */
/* @var $model Proceso */

$this->breadcrumbs=array(
	'Procesos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Proceso', 'url'=>array('index')),
	array('label'=>'Administrar Proceso', 'url'=>array('admin')),
);

?>

<h1>Proceso<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>