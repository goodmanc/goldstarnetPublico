<?php
/* @var $this FbColumnaController */
/* @var $model FbColumna */

$this->breadcrumbs=array(
	'Fb Columnas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar FbColumna', 'url'=>array('index')),
	array('label'=>'Administrar FbColumna', 'url'=>array('admin')),
);

?>

<h1>FbColumna<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>