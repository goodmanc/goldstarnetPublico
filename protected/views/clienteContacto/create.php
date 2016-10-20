<?php
/* @var $this ClienteContactoController */
/* @var $model ClienteContacto */

$this->breadcrumbs=array(
	'Cliente Contactos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar ClienteContacto', 'url'=>array('index')),
	array('label'=>'Administrar ClienteContacto', 'url'=>array('admin')),
);

?>

<h1>ClienteContacto<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>