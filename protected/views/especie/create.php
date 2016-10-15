<?php
/* @var $this EspecieController */
/* @var $model Especie */

$this->breadcrumbs=array(
	'Especies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Especie', 'url'=>array('index')),
	array('label'=>'Administrar Especie', 'url'=>array('admin')),
);

?>

<h1>Especie<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>