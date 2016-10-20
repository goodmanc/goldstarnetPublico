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
	array('label'=>'Ver ClienteContacto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar ClienteContacto', 'url'=>array('admin')),
);
?>

<h1>ClienteContacto<span> [<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>