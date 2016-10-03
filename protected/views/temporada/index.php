<?php
/* @var $this TemporadaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Temporadas',
);

$this->menu=array(
	array('label'=>'Crear Temporada', 'url'=>array('create')),
	array('label'=>'Administrar Temporada', 'url'=>array('admin')),
);
?>

<h1>Temporadas</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 
?>

