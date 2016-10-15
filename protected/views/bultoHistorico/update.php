<?php
/* @var $this BultoHistoricoController */
/* @var $model BultoHistorico */

$this->breadcrumbs=array(
	'Bulto Historicos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar BultoHistorico', 'url'=>array('index')),
	array('label'=>'Crear BultoHistorico', 'url'=>array('create')),
	array('label'=>'Ver BultoHistorico', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar BultoHistorico', 'url'=>array('admin')),
);
?>

<h1>BultoHistorico<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Editar'; ?>]</span></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>