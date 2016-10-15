<?php
/* @var $this ContratoAgricultorController */
/* @var $model ContratoAgricultor */

$this->breadcrumbs=array(
	'Contrato Agricultors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar ContratoAgricultor', 'url'=>array('index')),
	array('label'=>'Administrar ContratoAgricultor', 'url'=>array('admin')),
);

?>

<h1>ContratoAgricultor<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>