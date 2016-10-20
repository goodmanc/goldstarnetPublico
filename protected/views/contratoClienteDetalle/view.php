<?php
/* @var $this ContratoClienteDetalleController */
/* @var $model ContratoClienteDetalle */

$this->breadcrumbs=array(
	'Contrato Cliente Detalles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar ContratoClienteDetalle', 'url'=>array('index')),
	array('label'=>'Crear ContratoClienteDetalle', 'url'=>array('create')),
	array('label'=>'Actualizar ContratoClienteDetalle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ContratoClienteDetalle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ContratoClienteDetalle', 'url'=>array('admin')),
);
?>


<h1>Ver ContratoClienteDetalle #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>