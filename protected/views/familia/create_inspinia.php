<?php
/* @var $this FamiliaController */
/* @var $model Familia */

$this->breadcrumbs=array(
	'Familias'=>array('index'),
	'Create',
);

/* 
$this->menu=array(
	array('label'=>'Listar Familia', 'url'=>array('index')),
	array('label'=>'Administrar Familia', 'url'=>array('admin')),
);
*/
?>

<h1><?php echo $model->isNewRecord ? 'Crear ' : 'Guardar '; ?>Familia</h1>

<?php $this->renderPartial('_form_inspinia', array('model'=>$model)); ?>