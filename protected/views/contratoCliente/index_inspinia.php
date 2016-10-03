<?php
/* @var $this ContratoClienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contrato Clientes',
);

$this->menu=array(
	array('label'=>'Crear ContratoCliente', 'url'=>'javascript:create();'),
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

<script>
    var baseUrl = '/goldstarnet/<?php echo Yii::app()->controller->id ?>';

    
    function create() {
        
        dhxWins = new dhtmlXWindows();

        w1 = dhxWins.createWindow("w1", 230, 130, 960, 600);
        w1.setText("Crear <? $label; ?>");
        w1.centerOnScreen();
        
        w1.attachURL(baseUrl + "/create")
        
    }
    
</script>