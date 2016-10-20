<?php
/* @var $this CondicionController */
/* @var $model Condicion */

$this->breadcrumbs=array(
	'Condicions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Condicion', 'url'=>array('index')),
	array('label'=>'Administrar Condicion', 'url'=>array('admin')),
);

?>

<h1>Condicion<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>