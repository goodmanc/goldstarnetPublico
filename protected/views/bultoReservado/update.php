<?php
/* @var $this BultoReservadoController */
/* @var $model BultoReservado */

$this->breadcrumbs=array(
	'Bulto Reservados'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar BultoReservado', 'url'=>array('index')),
	array('label'=>'Crear BultoReservado', 'url'=>array('create')),
	array('label'=>'Ver BultoReservado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar BultoReservado', 'url'=>array('admin')),
);
?>

<h1>BultoReservado<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>