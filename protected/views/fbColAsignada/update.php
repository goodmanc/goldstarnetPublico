<?php
/* @var $this FbColAsignadaController */
/* @var $model FbColAsignada */

$this->breadcrumbs=array(
	'Fb Col Asignadas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar FbColAsignada', 'url'=>array('index')),
	array('label'=>'Crear FbColAsignada', 'url'=>array('create')),
	array('label'=>'Ver FbColAsignada', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar FbColAsignada', 'url'=>array('admin')),
);
?>

<h1>FbColAsignada<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>