<?php
/* @var $this StatusController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Status', 'url'=>array('index')),
	array('label'=>'Crear Status', 'url'=>array('create')),
	array('label'=>'Ver Status', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Status', 'url'=>array('admin')),
);
?>

<h2>Status<span> [<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h2>


<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>