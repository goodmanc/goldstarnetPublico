<?php
/* @var $this BultoReservadoController */
/* @var $model BultoReservado */

$this->breadcrumbs=array(
	'Bulto Reservados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar BultoReservado', 'url'=>array('index')),
	array('label'=>'Administrar BultoReservado', 'url'=>array('admin')),
);

?>

<h1>BultoReservado<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>