<?php
/* @var $this CondicionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Condiciones',
);

$this->menu=array(
	array('label'=>'Crear Condiciones', 'url'=>array('create')),
	array('label'=>'Administrar Condiciones', 'url'=>array('admin')),
);
?>

<h1>Condiciones</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 

