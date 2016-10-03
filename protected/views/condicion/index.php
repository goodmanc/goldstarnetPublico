<?php
/* @var $this CondicionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Condicions',
);

$this->menu=array(
	array('label'=>'Crear Condicion', 'url'=>array('create')),
	array('label'=>'Administrar Condicion', 'url'=>array('admin')),
);
?>

<h1>Condicions</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 

