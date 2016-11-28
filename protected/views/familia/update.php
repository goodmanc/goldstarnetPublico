<?php
/* @var $this FamiliaController */
/* @var $model Familia */

$this->breadcrumbs=array(
	'Familias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Familia', 'url'=>array('index')),
	array('label'=>'Crear Familia', 'url'=>array('create')),
	array('label'=>'Ver Familia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Familia', 'url'=>array('admin')),
);
?>

<h2>Familia<span> [<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h2>


<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>