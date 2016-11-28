<?php
/* @var $this FbColumnaController */
/* @var $model FbColumna */

$this->breadcrumbs=array(
	'Fb Columnas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar FbColumna', 'url'=>array('index')),
	array('label'=>'Crear FbColumna', 'url'=>array('create')),
	array('label'=>'Actualizar FbColumna', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar FbColumna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar FbColumna', 'url'=>array('admin')),
);
?>


<h1>Ver FbColumna #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>