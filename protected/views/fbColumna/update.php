<?php
/* @var $this FbColumnaController */
/* @var $model FbColumna */

$this->breadcrumbs=array(
	'Fb Columnas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar FbColumna', 'url'=>array('index')),
	array('label'=>'Crear FbColumna', 'url'=>array('create')),
	array('label'=>'Ver FbColumna', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar FbColumna', 'url'=>array('admin')),
);
?>

<h1>FbColumna<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>