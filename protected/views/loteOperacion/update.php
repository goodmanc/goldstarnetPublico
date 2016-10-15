<?php
/* @var $this LoteOperacionController */
/* @var $model LoteOperacion */

$this->breadcrumbs=array(
	'Lote Operacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar LoteOperacion', 'url'=>array('index')),
	array('label'=>'Crear LoteOperacion', 'url'=>array('create')),
	array('label'=>'Ver LoteOperacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar LoteOperacion', 'url'=>array('admin')),
);
?>

<h1>LoteOperacion<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>