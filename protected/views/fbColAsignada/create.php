<?php
/* @var $this FbColAsignadaController */
/* @var $model FbColAsignada */

$this->breadcrumbs=array(
	'Fb Col Asignadas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar FbColAsignada', 'url'=>array('index')),
	array('label'=>'Administrar FbColAsignada', 'url'=>array('admin')),
);

?>

<h1>FbColAsignada<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php 
	$view = '_form';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>