<?php
/* @var $this FbGrupoColumnaController */
/* @var $model FbGrupoColumna */

$this->breadcrumbs=array(
	'Fb Grupo Columnas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar FbGrupoColumna', 'url'=>array('index')),
	array('label'=>'Crear FbGrupoColumna', 'url'=>array('create')),
	array('label'=>'Ver FbGrupoColumna', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar FbGrupoColumna', 'url'=>array('admin')),
);
?>

<h2>FbGrupoColumna<span> [<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h2>


<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>