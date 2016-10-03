<?php
/* @var $this EspecieController */
/* @var $model Especie */

$this->breadcrumbs=array(
	'Especies'=>array('index'),
	'Create',
);

/* 
$this->menu=array(
	array('label'=>'Listar Especie', 'url'=>array('index')),
	array('label'=>'Administrar Especie', 'url'=>array('admin')),
);
*/
?>

<h1><?php echo $model->isNewRecord ? 'Crear ' : 'Guardar '; ?>Especie</h1>

<?php $this->renderPartial('_form_inspinia', array('model'=>$model)); ?>