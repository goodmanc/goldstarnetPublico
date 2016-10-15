<?php
/* @var $this FbReporteController */
/* @var $model FbReporte */

$this->breadcrumbs=array(
	'Fb Reportes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar FbReporte', 'url'=>array('index')),
	array('label'=>'Administrar FbReporte', 'url'=>array('admin')),
);

?>

<h1>FbReporte<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>