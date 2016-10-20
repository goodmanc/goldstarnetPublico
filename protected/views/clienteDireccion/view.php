<?php
/* @var $this ClienteDireccionController */
/* @var $model ClienteDireccion */

$this->breadcrumbs=array(
	'Cliente Direccions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar ClienteDireccion', 'url'=>array('index')),
	array('label'=>'Crear ClienteDireccion', 'url'=>array('create')),
	array('label'=>'Actualizar ClienteDireccion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ClienteDireccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ClienteDireccion', 'url'=>array('admin')),
);
?>


<h1>Ver ClienteDireccion #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>