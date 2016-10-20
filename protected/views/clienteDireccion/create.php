<?php
/* @var $this ClienteDireccionController */
/* @var $model ClienteDireccion */

$this->breadcrumbs=array(
	'Cliente Direccions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar ClienteDireccion', 'url'=>array('index')),
	array('label'=>'Administrar ClienteDireccion', 'url'=>array('admin')),
);

?>

<h1>ClienteDireccion<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>