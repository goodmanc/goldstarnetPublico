<?php
/* @var $this FamiliaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Familias',
);

$this->menu=array(
	array('label'=>'Crear Familia', 'url'=>'javascript:create();'),
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