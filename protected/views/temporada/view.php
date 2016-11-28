<?php
/* @var $this TemporadaController */
/* @var $model Temporada */

$this->breadcrumbs=array(
	'Temporadas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Temporada', 'url'=>array('index')),
	array('label'=>'Crear Temporada', 'url'=>array('create')),
	array('label'=>'Actualizar Temporada', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Temporada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Temporada', 'url'=>array('admin')),
);
?>


<h1>Ver Temporada #<?php echo $model->id; ?></h1>

<?php 
	$view = '_view';
	$view .= (($viewFile=$this->getViewFile($view.'_custom'))!==false) ? '_custom' : '';
	$this->renderPartial($view, array('model'=>$model));
 ?>

<script>
    var reload_parent = <?php echo $reload_parent; ?>;
    if (reload_parent === 1) {
        alert('actualizando lista');
    }
</script>