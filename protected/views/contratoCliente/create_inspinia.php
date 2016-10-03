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

<h1><?php echo $model->isNewRecord ? 'Crear ' : 'Guardar '; ?>ContratoCliente</h1>

<?php $this->renderPartial('_form_inspinia', array('model'=>$model)); ?>