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

<h1>ContratoCliente<span> [<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>