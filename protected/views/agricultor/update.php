<?php
/* @var $this AgricultorController */
/* @var $model Agricultor */

$this->breadcrumbs=array(
	'Agricultors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Agricultor', 'url'=>array('index')),
	array('label'=>'Crear Agricultor', 'url'=>array('create')),
	array('label'=>'Ver Agricultor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Agricultor', 'url'=>array('admin')),
);
?>

<h2>Agricultor<span> [<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h2>


<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>