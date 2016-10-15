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
	array('label'=>'Actualizar ContratoCliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ContratoCliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ContratoCliente', 'url'=>array('admin')),
);
?>


<h1>Ver ContratoCliente #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>