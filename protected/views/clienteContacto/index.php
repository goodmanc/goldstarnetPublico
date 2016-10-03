<?php
/* @var $this ClienteContactoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cliente Contactos',
);

$this->menu=array(
	array('label'=>'Crear ClienteContacto', 'url'=>array('create')),
	array('label'=>'Administrar ClienteContacto', 'url'=>array('admin')),
);
?>

<h1>Cliente Contactos</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 

