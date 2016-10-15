<?php
/* @var $this FbReporteColumnasController */
/* @var $model FbReporteColumnas */

$this->breadcrumbs=array(
	'Fb Reporte Columnases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar FbReporteColumnas', 'url'=>array('index')),
	array('label'=>'Crear FbReporteColumnas', 'url'=>array('create')),
	array('label'=>'Ver FbReporteColumnas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar FbReporteColumnas', 'url'=>array('admin')),
);
?>

<h1>FbReporteColumnas<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>