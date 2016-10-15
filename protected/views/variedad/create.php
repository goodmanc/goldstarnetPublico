<?php
/* @var $this VariedadController */
/* @var $model Variedad */

$this->breadcrumbs=array(
	'Variedads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Variedad', 'url'=>array('index')),
	array('label'=>'Administrar Variedad', 'url'=>array('admin')),
);

?>

<h1>Variedad<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>