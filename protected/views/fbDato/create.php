<?php
/* @var $this FbDatoController */
/* @var $model FbDato */

$this->breadcrumbs=array(
	'Fb Datos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar FbDato', 'url'=>array('index')),
	array('label'=>'Administrar FbDato', 'url'=>array('admin')),
);

?>

<h1>FbDato<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>