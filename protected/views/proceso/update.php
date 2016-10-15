<?php
/* @var $this ProcesoController */
/* @var $model Proceso */

$this->breadcrumbs=array(
	'Procesos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Proceso', 'url'=>array('index')),
	array('label'=>'Crear Proceso', 'url'=>array('create')),
	array('label'=>'Ver Proceso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Proceso', 'url'=>array('admin')),
);
?>

<h1>Proceso<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>