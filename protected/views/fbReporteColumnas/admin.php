<?php
/* @var $this FbReporteColumnasController */
/* @var $model FbReporteColumnas */

$label = 'Fb Reporte Columnas';
$labelPlural = 'Fb Reporte Columnases';
$this->breadcrumbs=array(
	'Fb Reporte Columnas'=>array('index'),
	'Administración',
);

$this->menu=array(
array('label'=>'Listar FbReporteColumnas', 'icon' => '<i class="fa fa-list-alt"></i>', 'url'=>array('index')),
array('label'=>'Crear FbReporteColumnas', 'icon' => '<i class="fa fa-plus-square-o"></i>', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#fb-reporte-columnas-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h1>Fb Reporte Columnas</h1>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,'tagName'=>'h4'
        ));
        ?>
    </div>
    <div class="col-lg-6 pull-right">
        <div id="ribbonObj"></div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Listado</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
                <div id="toolbarObj"></div>
            <div class="ibox-content">
                <div id="editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-12">



<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $controllerID = $this->id;
    $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'fb-reporte-columnas-grid',
    'itemsCssClass'=>"table table-striped table-bordered table-hover table-condensed",
      'htmlOptions'=>array('class'=>''),   
      'ajaxUpdate'=>false,
      'pager'=>array(
          'cssFile'=>false,
          'header'=>'',
          'firstPageLabel'=>'&lt;&lt;',
          'prevPageLabel'=>'Anterior',
          'nextPageLabel'=>'Siguiente', 
          'lastPageLabel'=>'&gt;&gt;',
          'maxButtonCount'=>5,
          'class'=>'CLinkPager',
          'htmlOptions'=>array('class'=>'pagination pull-right')
    ),
    'template'=>'<div class="gridHeader"></div><div class="table-responsive table-bordered">{items}</div><div class="gridFooter"><div class="row"><div class="cols-lg-6 pull-right">{pager}</div><div class="cols-lg-6">{summary}</div></div></div>',
    'summaryText' => 'Mostrando {start} - {end} de {count} registros',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        array(
        'name' => 'check',
        'id' => 'selectedIds',
        'value' => '$data->id',
        'class' => 'CCheckBoxColumn',
        'selectableRows' => '100',                
        ),
    array(
        'header' => 'FN',
        'class'=>'CButtonColumn',
        'headerHtmlOptions'=>array('style'=>'text-align:center;'),
        'template'=>'<div style="text-align:center;">{view2}{update2}{delete}</div>',
        'buttons' => array(
            'view2' => array(
                'label'=>'View', 
                'imageUrl'=>Yii::app()->request->baseUrl.'/images/led-icons/magnifier.png',  
                'url'=>'Yii::app()->createUrl("'.$controllerID.'/view/?id=$data->id")',
                'click'=>"function(){
                            view($(this).attr('href'));    
                        return false;
                }",
            ),
            'update2' => array(
                'label'=>'Update', 
                'imageUrl'=>Yii::app()->request->baseUrl.'/images/led-icons/page_white_edit.png',  
                'url'=>'Yii::app()->createUrl("'.$controllerID.'/update", array("id"=>$data->id))',
                'click'=>"function(){
                            update($(this).attr('href'));    
                        return false;
                }",
            ),
            'delete' => array(
                'label'=>'Delete', 
                'imageUrl'=>Yii::app()->request->baseUrl.'/images/led-icons/cross.png',  
                'url'=>'Yii::app()->createUrl("'.$controllerID.'/delete", array("id"=>$data->id))',
            ),
        ),
    ),
		'id',
		array(
			'name'=>'fbReporte_id',
			'filter'=>CHtml::listData(Familia::model()->findAll(), 'id', 'nombre'),
			'value'=>'$data->fbreporte->nombre'),
		array(
			'name'=>'fbColAsignada_id',
			'filter'=>CHtml::listData(Familia::model()->findAll(), 'id', 'status'),
			'value'=>'$data->fbcolasignada->status'),
		'nombre',
		'status',
		'used_by',
		/*
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
		*/
),
)); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    
    var label ='Fb Reporte Columnas';
    var labelPlural ='Fb Reporte Columnases';
    var baseUrl = '/goldstarnetPublico/';
    var baseControllerUrl = baseUrl+'/<?php echo Yii::app()->controller->id ?>';
    var baseImgsUrl = baseUrl+'/js/dhtmlx/imgs';
    var myRibbon;

    function create() {
        dhxWins = new dhtmlXWindows();
        w1 = dhxWins.createWindow("w1", 230, 130, 960, 600);
        w1.setText("Crear "+label);
        w1.centerOnScreen();
        w1.attachURL(baseControllerUrl + "/create")
    }

    function view(href) {
        dhxWins = new dhtmlXWindows();
        w1 = dhxWins.createWindow("w1", 230, 130, 960, 600);
        w1.setText("Ver "+label);
        w1.centerOnScreen();
        w1.attachURL(href)
    }

    function update(href) {
        dhxWins = new dhtmlXWindows();
        w1 = dhxWins.createWindow("w1", 230, 130, 960, 600);
        w1.setText("Modificar "+label);
        w1.centerOnScreen();
        w1.attachURL(href)
    }

    function startToolbar() {
        var sep = 1;
        myToolbar = new dhtmlXToolbarObject({
                parent: "toolbarObj",
                icon_path: baseImgsUrl + "/common/imgs/",
                items: [
                        {type: "text", id: "info", text: "Toolbar"},
                        {type: "separator", id: "sep"+sep++},
                        {type: "button", id: "create", tooltip: "Crear", img: "new.gif"},
                        {type: "separator", id: "sep"+sep++},
                        {type: "button", id: "excel", tooltip: "Descargar Excel", img: "../18/excel.png"},
                        {type: "separator", id: "sep"+sep++},
                ]
        });
        myToolbar.attachEvent("onClick", function(id){
            switch (id) {
                case 'create': create();
                            break;
            }
        });
    }
    function startRibbon() {
        var data = {
            parent: "ribbonObj",
            icons_path: baseImgsUrl + "/common/",
            items: [
                {
                    type: 'block', list: [
                        {type: 'button', text: 'Excel', img: "48/excel.png", isbig: true}
                    ]}
            ]
        };
        var w = data.items.length*80;
        myRibbon = new dhtmlXRibbon(data);
        // if you change parent's size
        document.getElementById("ribbonObj").style.width = w+"px";
//        document.getElementById("ribbonObj").style.height = "100%";

        // tabbar needs to be adjusted
        myRibbon.setSizes();
    }
    
    

    function startJS() {
//        startRibbon();
        startToolbar();
    }

    window.onload = startJS;

</script>