<?php
/* @var $this FbReporteColumnasController */
/* @var $model FbReporteColumnas */

$this->breadcrumbs=array(
	'Fb Reporte Columnases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar FbReporteColumnas', 'url'=>array('index')),
	array('label'=>'Administrar FbReporteColumnas', 'url'=>array('admin')),
);

?>

<h1>FbReporteColumnas<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>