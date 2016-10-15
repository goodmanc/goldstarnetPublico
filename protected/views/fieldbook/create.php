<?php
/* @var $this FieldbookController */
/* @var $model Fieldbook */

$this->breadcrumbs=array(
	'Fieldbooks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Fieldbook', 'url'=>array('index')),
	array('label'=>'Administrar Fieldbook', 'url'=>array('admin')),
);

?>

<h1>Fieldbook<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>