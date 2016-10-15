<?php
/* @var $this FieldbookController */
/* @var $model Fieldbook */

$this->breadcrumbs=array(
	'Fieldbooks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Fieldbook', 'url'=>array('index')),
	array('label'=>'Crear Fieldbook', 'url'=>array('create')),
	array('label'=>'Ver Fieldbook', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Fieldbook', 'url'=>array('admin')),
);
?>

<h1>Fieldbook<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>