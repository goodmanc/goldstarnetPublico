<?php
/* @var $this CondicionesController */
/* @var $model Condiciones */

$this->breadcrumbs=array(
	'Condiciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Condiciones', 'url'=>array('index')),
	array('label'=>'Crear Condiciones', 'url'=>array('create')),
	array('label'=>'Actualizar Condiciones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Condiciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Condiciones', 'url'=>array('admin')),
);
?>


<h1>Ver Condiciones #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>