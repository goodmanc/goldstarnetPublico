<?php
/* @var $this FbCategoriaController */
/* @var $model FbCategoria */

$this->breadcrumbs=array(
	'Fb Categorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar FbCategoria', 'url'=>array('index')),
	array('label'=>'Crear FbCategoria', 'url'=>array('create')),
	array('label'=>'Ver FbCategoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar FbCategoria', 'url'=>array('admin')),
);
?>

<h1>FbCategoria<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>