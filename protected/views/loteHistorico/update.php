<?php
/* @var $this LoteHistoricoController */
/* @var $model LoteHistorico */

$this->breadcrumbs=array(
	'Lote Historicos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar LoteHistorico', 'url'=>array('index')),
	array('label'=>'Crear LoteHistorico', 'url'=>array('create')),
	array('label'=>'Ver LoteHistorico', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar LoteHistorico', 'url'=>array('admin')),
);
?>

<h1>LoteHistorico<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>