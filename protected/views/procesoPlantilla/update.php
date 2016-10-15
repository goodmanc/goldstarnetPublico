<?php
/* @var $this ProcesoPlantillaController */
/* @var $model ProcesoPlantilla */

$this->breadcrumbs=array(
	'Proceso Plantillas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar ProcesoPlantilla', 'url'=>array('index')),
	array('label'=>'Crear ProcesoPlantilla', 'url'=>array('create')),
	array('label'=>'Ver ProcesoPlantilla', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar ProcesoPlantilla', 'url'=>array('admin')),
);
?>

<h1>ProcesoPlantilla<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>