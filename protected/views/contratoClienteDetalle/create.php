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

<h1>ContratoClienteDetalle<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>