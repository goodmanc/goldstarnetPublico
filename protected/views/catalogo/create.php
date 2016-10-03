<?php
/* @var $this CatalogoController */
/* @var $model Catalogo */

$this->breadcrumbs=array(
	'Catalogos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Catalogo', 'url'=>array('index')),
	array('label'=>'Administrar Catalogo', 'url'=>array('admin')),
);
?>

<h1>Crear Catalogo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>