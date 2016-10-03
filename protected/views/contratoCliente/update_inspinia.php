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

<h1>Update ContratoCliente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form_inspinia', array('model'=>$model)); ?>