<?php
/* @var $this ContratoAgricultorController */
/* @var $model ContratoAgricultor */

$this->breadcrumbs=array(
	'Contrato Agricultors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar ContratoAgricultor', 'url'=>array('index')),
	array('label'=>'Crear ContratoAgricultor', 'url'=>array('create')),
	array('label'=>'Actualizar ContratoAgricultor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ContratoAgricultor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ContratoAgricultor', 'url'=>array('admin')),
);
?>


<h1>Ver ContratoAgricultor #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>