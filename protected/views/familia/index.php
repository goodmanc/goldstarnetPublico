<?php
/* @var $this FamiliaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Familias',
);

$this->menu=array(
	array('label'=>'Crear Familia', 'url'=>array('create')),
	array('label'=>'Administrar Familia', 'url'=>array('admin')),
);
?>

<h1>Familias</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 
?>

