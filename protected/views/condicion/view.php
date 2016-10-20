<?php
/* @var $this CondicionController */
/* @var $model Condicion */

$this->breadcrumbs=array(
	'Condicions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Condicion', 'url'=>array('index')),
	array('label'=>'Crear Condicion', 'url'=>array('create')),
	array('label'=>'Actualizar Condicion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Condicion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Condicion', 'url'=>array('admin')),
);
?>


<h1>Ver Condicion #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>