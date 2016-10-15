<?php
/* @var $this FamiliaController */
/* @var $model Familia */

$this->breadcrumbs=array(
	'Familias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Familia', 'url'=>array('index')),
	array('label'=>'Administrar Familia', 'url'=>array('admin')),
);

?>

<h1>Familia<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>