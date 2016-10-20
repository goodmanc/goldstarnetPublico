<?php
/* @var $this CondicionesController */
/* @var $model Condiciones */

$this->breadcrumbs=array(
	'Condiciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Condiciones', 'url'=>array('index')),
	array('label'=>'Administrar Condiciones', 'url'=>array('admin')),
);

?>

<h1>Condiciones<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>