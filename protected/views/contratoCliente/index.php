<?php
/* @var $this ContratoClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contrato Clientes',
);

$this->menu=array(
	array('label'=>'Crear ContratoCliente', 'url'=>array('create')),
	array('label'=>'Administrar ContratoCliente', 'url'=>array('admin')),
);
?>

<h1>Contrato Clientes</h1>

<?php  $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'itemsCssClass'=>"table table-striped",
    'pager'=>array("htmlOptions"=>array("class"=>"pagination")),    
)); 
?>

