<?php
/* @var $this CatalogoController */
/* @var $model Catalogo */

$this->breadcrumbs=array(
	'Catalogos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Catalogo', 'url'=>array('index')),
	array('label'=>'Crear Catalogo', 'url'=>array('create')),
	array('label'=>'Actualizar Catalogo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Catalogo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Catalogo', 'url'=>array('admin')),
);
?>

<h1>Ver Catalogo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'cliente_id',
		'variedad_id',
		'substitute',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
	),
)); ?>