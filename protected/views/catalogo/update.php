<?php
/* @var $this CatalogoController */
/* @var $model Catalogo */

$this->breadcrumbs=array(
	'Catalogos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Catalogo', 'url'=>array('index')),
	array('label'=>'Crear Catalogo', 'url'=>array('create')),
	array('label'=>'Ver Catalogo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Catalogo', 'url'=>array('admin')),
);
?>

<h1>Update Catalogo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>