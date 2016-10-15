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
	array('label'=>'Actualizar Agricultor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Agricultor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Agricultor', 'url'=>array('admin')),
);
?>


<h1>Ver Agricultor #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>