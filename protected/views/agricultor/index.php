<?php
/* @var $this AgricultorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agricultors',
);

$this->menu=array(
	array('label'=>'Crear Agricultor', 'url'=>array('create')),
	array('label'=>'Administrar Agricultor', 'url'=>array('admin')),
);
?>

<h1>Agricultors</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 
?>

