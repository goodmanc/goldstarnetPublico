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

<h2>Fieldbook<span> [<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h2>


<?php 
	$view = '_ingreso';
	$this->renderPartial($view, array('model'=>$model,'child_model'=>$child_model));
 ?>