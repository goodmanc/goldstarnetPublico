<?php
/* @var $this AgricultorController */
/* @var $model Agricultor */

$this->breadcrumbs=array(
	'Agricultors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Agricultor', 'url'=>array('index')),
	array('label'=>'Administrar Agricultor', 'url'=>array('admin')),
);

?>

<h1>Agricultor<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>