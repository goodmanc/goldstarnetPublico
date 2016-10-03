<?php
/* @var $this ClienteDireccionController */
/* @var $model ClienteDireccion */

$this->breadcrumbs=array(
	'Cliente Direccions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar ClienteDireccion', 'url'=>array('index')),
	array('label'=>'Crear ClienteDireccion', 'url'=>array('create')),
	array('label'=>'Ver ClienteDireccion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar ClienteDireccion', 'url'=>array('admin')),
);
?>

<h1>Update ClienteDireccion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>