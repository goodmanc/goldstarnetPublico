<?php
/* @var $this FbCategoriaController */
/* @var $model FbCategoria */

$this->breadcrumbs=array(
	'Fb Categorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar FbCategoria', 'url'=>array('index')),
	array('label'=>'Administrar FbCategoria', 'url'=>array('admin')),
);

?>

<h1>FbCategoria<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>