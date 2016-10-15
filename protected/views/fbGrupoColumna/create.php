<?php
/* @var $this FbGrupoColumnaController */
/* @var $model FbGrupoColumna */

$this->breadcrumbs=array(
	'Fb Grupo Columnas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar FbGrupoColumna', 'url'=>array('index')),
	array('label'=>'Administrar FbGrupoColumna', 'url'=>array('admin')),
);

?>

<h1>FbGrupoColumna<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>