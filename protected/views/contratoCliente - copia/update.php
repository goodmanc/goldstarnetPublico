<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */

$this->breadcrumbs=array(
	'Contrato Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar ContratoCliente', 'url'=>array('index')),
	array('label'=>'Crear ContratoCliente', 'url'=>array('create')),
	array('label'=>'Ver ContratoCliente', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar ContratoCliente', 'url'=>array('admin')),
);
?>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model,'child_model'=>$child_model));
 ?>