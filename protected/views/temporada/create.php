<?php
/* @var $this TemporadaController */
/* @var $model Temporada */

$this->breadcrumbs=array(
	'Temporadas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Temporada', 'url'=>array('index')),
	array('label'=>'Administrar Temporada', 'url'=>array('admin')),
);

?>

<h1>Temporada<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>