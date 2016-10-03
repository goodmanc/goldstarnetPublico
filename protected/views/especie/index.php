<?php
/* @var $this EspecieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Especies',
);

$this->menu=array(
	array('label'=>'Crear Especie', 'url'=>array('create')),
	array('label'=>'Administrar Especie', 'url'=>array('admin')),
);
?>

<h1>Especies</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 
?>

