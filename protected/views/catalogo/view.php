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
	array('label'=>'Actualizar Catalogo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Catalogo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Catalogo', 'url'=>array('admin')),
);
?>


<h1>Ver Catalogo #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>