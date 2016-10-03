<?php
/* @var $this ClienteDireccionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cliente Direccions',
);

$this->menu=array(
	array('label'=>'Crear ClienteDireccion', 'url'=>array('create')),
	array('label'=>'Administrar ClienteDireccion', 'url'=>array('admin')),
);
?>

<h1>Cliente Direccions</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 

