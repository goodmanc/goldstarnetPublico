<?php
/* @var $this ProcesoPlantillaController */
/* @var $model ProcesoPlantilla */

$this->breadcrumbs=array(
	'Proceso Plantillas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar ProcesoPlantilla', 'url'=>array('index')),
	array('label'=>'Administrar ProcesoPlantilla', 'url'=>array('admin')),
);

?>

<h1>ProcesoPlantilla<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>