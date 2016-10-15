<?php
/* @var $this MonedaController */
/* @var $model Moneda */

$this->breadcrumbs=array(
	'Monedas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Moneda', 'url'=>array('index')),
	array('label'=>'Crear Moneda', 'url'=>array('create')),
	array('label'=>'Ver Moneda', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Moneda', 'url'=>array('admin')),
);
?>

<h1>Moneda<span> [<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>