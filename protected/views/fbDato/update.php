<?php
/* @var $this FbDatoController */
/* @var $model FbDato */

$this->breadcrumbs=array(
	'Fb Datos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar FbDato', 'url'=>array('index')),
	array('label'=>'Crear FbDato', 'url'=>array('create')),
	array('label'=>'Ver FbDato', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar FbDato', 'url'=>array('admin')),
);
?>

<h1>FbDato<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>