<?php
/* @var $this ProcesoPlantillaController */
/* @var $model ProcesoPlantilla */

$this->breadcrumbs=array(
	'Proceso Plantillas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar ProcesoPlantilla', 'url'=>array('index')),
	array('label'=>'Crear ProcesoPlantilla', 'url'=>array('create')),
	array('label'=>'Actualizar ProcesoPlantilla', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar ProcesoPlantilla', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar ProcesoPlantilla', 'url'=>array('admin')),
);
?>

<h1>Ver ProcesoPlantilla #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'nombre',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
