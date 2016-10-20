<?php
/* @var $this ClienteContactoController */
/* @var $model ClienteContacto */

$this->breadcrumbs=array(
	'Cliente Contactos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar ClienteContacto', 'url'=>array('index')),
	array('label'=>'Crear ClienteContacto', 'url'=>array('create')),
	array('label'=>'Actualizar ClienteContacto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ClienteContacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ClienteContacto', 'url'=>array('admin')),
);
?>


<h1>Ver ClienteContacto #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>