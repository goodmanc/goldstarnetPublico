<?php
/* @var $this EspecieController */
/* @var $model Especie */

$this->breadcrumbs=array(
	'Especies'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Especie', 'url'=>array('index')),
	array('label'=>'Crear Especie', 'url'=>array('create')),
	array('label'=>'Actualizar Especie', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Especie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Especie', 'url'=>array('admin')),
);
?>


<h1>Ver Especie #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>