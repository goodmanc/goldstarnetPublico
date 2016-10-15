<?php
/* @var $this FbCategoriaController */
/* @var $model FbCategoria */

$this->breadcrumbs=array(
	'Fb Categorias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar FbCategoria', 'url'=>array('index')),
	array('label'=>'Crear FbCategoria', 'url'=>array('create')),
	array('label'=>'Actualizar FbCategoria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar FbCategoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar FbCategoria', 'url'=>array('admin')),
);
?>

<h1>Ver FbCategoria #<?php echo $model->id; ?></h1>

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
