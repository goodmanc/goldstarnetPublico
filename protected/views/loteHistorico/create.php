<?php
/* @var $this LoteHistoricoController */
/* @var $model LoteHistorico */

$this->breadcrumbs=array(
	'Lote Historicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar LoteHistorico', 'url'=>array('index')),
	array('label'=>'Administrar LoteHistorico', 'url'=>array('admin')),
);

?>

<h1>LoteHistorico<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>