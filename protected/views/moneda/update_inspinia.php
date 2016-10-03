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

<h1>Update Moneda <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form_inspinia', array('model'=>$model)); ?>