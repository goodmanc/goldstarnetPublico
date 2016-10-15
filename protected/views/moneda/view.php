<?php
/* @var $this MonedaController */
/* @var $model Moneda */

$this->breadcrumbs=array(
	'Monedas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Moneda', 'url'=>array('index')),
	array('label'=>'Crear Moneda', 'url'=>array('create')),
	array('label'=>'Actualizar Moneda', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Moneda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Moneda', 'url'=>array('admin')),
);
?>


<h1>Ver Moneda #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>