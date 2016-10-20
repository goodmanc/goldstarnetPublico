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

<h1>Catalogo<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>