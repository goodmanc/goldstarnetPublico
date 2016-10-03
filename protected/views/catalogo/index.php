<?php
/* @var $this CatalogoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Catalogos',
);

$this->menu=array(
	array('label'=>'Crear Catalogo', 'url'=>array('create')),
	array('label'=>'Administrar Catalogo', 'url'=>array('admin')),
);
?>

<h1>Catalogos</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 

