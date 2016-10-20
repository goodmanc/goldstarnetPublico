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

<h1>Catalogo<span> [<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>