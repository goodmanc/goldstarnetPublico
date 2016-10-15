<?php
/* @var $this LoteOperacionController */
/* @var $model LoteOperacion */

$this->breadcrumbs=array(
	'Lote Operacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar LoteOperacion', 'url'=>array('index')),
	array('label'=>'Administrar LoteOperacion', 'url'=>array('admin')),
);

?>

<h1>LoteOperacion<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>