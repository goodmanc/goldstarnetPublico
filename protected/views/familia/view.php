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
	array('label'=>'Actualizar Familia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Familia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Familia', 'url'=>array('admin')),
);
?>


<h1>Ver Familia #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>