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

<h1>Crear Agricultor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>