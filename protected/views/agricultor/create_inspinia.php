<?php
/* @var $this AgricultorController */
/* @var $model Agricultor */

$this->breadcrumbs=array(
	'Agricultors'=>array('index'),
	'Create',
);

/* 
$this->menu=array(
	array('label'=>'Listar Agricultor', 'url'=>array('index')),
	array('label'=>'Administrar Agricultor', 'url'=>array('admin')),
);
*/
?>

<h1><?php echo $model->isNewRecord ? 'Crear ' : 'Guardar '; ?>Agricultor</h1>

<?php $this->renderPartial('_form_inspinia', array('model'=>$model)); ?>