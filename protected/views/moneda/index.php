<?php
/* @var $this MonedaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Monedas',
);

$this->menu=array(
	array('label'=>'Crear Moneda', 'url'=>array('create')),
	array('label'=>'Administrar Moneda', 'url'=>array('admin')),
);
?>

<h1>Monedas</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 
?>

