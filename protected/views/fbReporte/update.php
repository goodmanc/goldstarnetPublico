<?php
/* @var $this FbReporteController */
/* @var $model FbReporte */

$this->breadcrumbs=array(
	'Fb Reportes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar FbReporte', 'url'=>array('index')),
	array('label'=>'Crear FbReporte', 'url'=>array('create')),
	array('label'=>'Ver FbReporte', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar FbReporte', 'url'=>array('admin')),
);
?>

<h1>FbReporte<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>