<?php
/* @var $this VariedadController */
/* @var $model Variedad */

$this->breadcrumbs=array(
	'Variedads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Variedad', 'url'=>array('index')),
	array('label'=>'Crear Variedad', 'url'=>array('create')),
	array('label'=>'Actualizar Variedad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Variedad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Variedad', 'url'=>array('admin')),
);
?>

<h1>Ver Variedad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'especie_id',
		'nombre',
		'propiedad1',
		'propiedad2',
		'propiedad3',
		'propiedad4',
		'propiedad5',
		'propiedad6',
		'propiedad7',
		'propiedad8',
		'propiedad9',
		'propiedad10',
		'propiedad11',
		'propiedad12',
		'propiedad13',
		'propiedad14',
		'propiedad15',
		'propiedad16',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>
