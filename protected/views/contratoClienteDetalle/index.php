<?php
/* @var $this ContratoClienteDetalleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contrato Cliente Detalles',
);

$this->menu=array(
	array('label'=>'Crear ContratoClienteDetalle', 'url'=>array('create')),
	array('label'=>'Administrar ContratoClienteDetalle', 'url'=>array('admin')),
);
?>

<h1>Contrato Cliente Detalles</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 

