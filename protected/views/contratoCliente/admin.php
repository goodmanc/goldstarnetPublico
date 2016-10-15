<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */

$label = 'Contrato Cliente';
$labelPlural = 'Contrato Clientes';
$this->breadcrumbs=array(
	'Contrato Cliente'=>array('index'),
	'Administración',
);
$controllerID = $this->id;
$this->menu=array(
array('label'=>'Listar ContratoCliente', 'icon' => '<i class="fa fa-list-alt"></i>', 'url'=>array('index')),
array('label'=>'Crear ContratoCliente', 'icon' => '<i class="fa fa-plus-square-o"></i>', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#contrato-cliente-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h1>Contrato Cliente</h1>
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

<?php 
    $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'contrato-cliente-grid',
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
        'template'=>'<div style="text-align:center;width:50px;display:-webkit-flex;-webkit-flex-wrap:wrap;display:flex;flex-wrap:wrap;">{view2}{update2}{delete}</div>',
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
		array(
			'name'=>'id',
			'type'=>'html',
			'htmlOptions'=>array('style'=>'word-wrap: break-word;'),
			'headerHtmlOptions'=>array('style'=>'text-align:center;'),
			'filterHtmlOptions'=>array('style'=>'width:70px'),
			'value'=>'"<div style=\"text-align:center;width:70px;\">" . $data["id"] . "</div>"',
			),
		array(
			'name'=>'temporada_id',
			'header'=>'',
			'filter'=>CHtml::listData(Temporada::model()->findAll(), 'id', 'year'),
			'value'=>'$data->temporada==null ? null : $data->temporada->year'),
		array(
			'name'=>'cliente_id',
			'header'=>'',
			'filter'=>CHtml::listData(Cliente::model()->findAll(), 'id', 'oventa_id'),
			'value'=>'$data->cliente==null ? null : $data->cliente->oventa_id'),
		array(
			'name'=>'proyecto_id',
			'header'=>'',
			'filter'=>CHtml::listData(Proyecto::model()->findAll(), 'id', 'nombre'),
			'value'=>'$data->proyecto==null ? null : $data->proyecto->nombre'),
		array(
			'name'=>'fecha',
			),
		array(
			'name'=>'observaciones',
			),
		array(
			'name'=>'guarantee',
			),
		array(
			'name'=>'conditionsHeader',
			),
		array(
			'name'=>'conditionsFooter',
			),
		/*
		array(
			'name'=>'growerServices',
			),
		array(
			'name'=>'stockSeed',
			),
		array(
			'name'=>'productionReports',
			),
		array(
			'name'=>'shipments',
			),
		array(
			'name'=>'aditionalPhitosanitaryReq',
			),
		array(
			'name'=>'preShipmentsSeedSamples',
			),
		array(
			'name'=>'earlyTerminationBuyOut',
			),
		array(
			'name'=>'overProduction',
			),
		array(
			'name'=>'prices',
			),
		array(
			'name'=>'advancePayments',
			),
		array(
			'name'=>'paymentTerms',
			),
		array(
			'name'=>'confidentiality',
			),
		array(
			'name'=>'lotNumberAssignment',
			),
		array(
			'name'=>'arbitrationAndLaw',
			),
		array(
			'name'=>'buyerSigName',
			),
		array(
			'name'=>'growerSigName',
			),
		array(
			'name'=>'status',
			),
		array(
			'name'=>'used_by',
			),
		array(
			'name'=>'check_in',
			),
		array(
			'name'=>'created_by',
			),
		array(
			'name'=>'created',
			),
		array(
			'name'=>'modified_by',
			),
		array(
			'name'=>'modified',
			),
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
    
    var label ='Contrato Cliente';
    var labelPlural ='Contrato Clientes';
    var baseUrl = '/goldstarnetPublico/';
    var baseControllerUrl = baseUrl+'/<?php echo Yii::app()->controller->id ?>';
    var queryString = '<?php echo Yii::app()->request->getQueryString(); ?>';   
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

    function excel() {
        document.location.href = baseControllerUrl + '/excel?'+queryString;
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
                case 'excel': excel();
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