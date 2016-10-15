<?php
/* @var $this PlantaAreaController */
/* @var $model PlantaArea */

$this->breadcrumbs=array(
	'Planta Areas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar PlantaArea', 'url'=>array('index')),
	array('label'=>'Crear PlantaArea', 'url'=>array('create')),
	array('label'=>'Actualizar PlantaArea', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar PlantaArea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar PlantaArea', 'url'=>array('admin')),
);
?>

<h1>Ver PlantaArea #<?php echo $model->id; ?></h1>

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
