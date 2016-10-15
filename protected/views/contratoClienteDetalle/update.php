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
	array('label'=>'Ver ContratoClienteDetalle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar ContratoClienteDetalle', 'url'=>array('admin')),
);
?>

<h1>ContratoClienteDetalle<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>