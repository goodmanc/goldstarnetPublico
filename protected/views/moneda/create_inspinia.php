<?php
/* @var $this MonedaController */
/* @var $model Moneda */

$this->breadcrumbs=array(
	'Monedas'=>array('index'),
	'Create',
);

/* 
$this->menu=array(
	array('label'=>'Listar Moneda', 'url'=>array('index')),
	array('label'=>'Administrar Moneda', 'url'=>array('admin')),
);
*/
?>

<h1><?php echo $model->isNewRecord ? 'Crear ' : 'Guardar '; ?>Moneda</h1>

<?php $this->renderPartial('_form_inspinia', array('model'=>$model)); ?>