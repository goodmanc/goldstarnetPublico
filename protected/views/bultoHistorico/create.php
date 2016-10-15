<?php
/* @var $this BultoHistoricoController */
/* @var $model BultoHistorico */

$this->breadcrumbs=array(
	'Bulto Historicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar BultoHistorico', 'url'=>array('index')),
	array('label'=>'Administrar BultoHistorico', 'url'=>array('admin')),
);

?>

<h1>BultoHistorico<span>[<?php echo $model->isNewRecord ? 'Crear' : 'Guardar'; ?>]</span></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>