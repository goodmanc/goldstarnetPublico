<?php
/* @var $this VariedadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Variedads',
);

$this->menu=array(
	array('label'=>'Crear Variedad', 'url'=>array('create')),
	array('label'=>'Administrar Variedad', 'url'=>array('admin')),
);
?>

<h1>Variedads</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 

