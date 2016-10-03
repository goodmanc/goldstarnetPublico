<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */

$this->breadcrumbs=array(
	'Contrato Clientes'=>array('index'),
	'Create',
);

/* 
$this->menu=array(
	array('label'=>'Listar ContratoCliente', 'url'=>array('index')),
	array('label'=>'Administrar ContratoCliente', 'url'=>array('admin')),
);
*/
?>

<h1>Crear ContratoCliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>