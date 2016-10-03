<?php
/* @var $this ContratoClienteDetalleController */
/* @var $model ContratoClienteDetalle */

$this->breadcrumbs=array(
	'Contrato Cliente Detalles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar ContratoClienteDetalle', 'url'=>array('index')),
	array('label'=>'Administrar ContratoClienteDetalle', 'url'=>array('admin')),
);
?>

<h1>Crear ContratoClienteDetalle</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>