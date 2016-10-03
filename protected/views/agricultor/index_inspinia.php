<?php
/* @var $this AgricultorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agricultors',
);

$this->menu=array(
	array('label'=>'Crear Agricultor', 'url'=>'javascript:create();'),
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