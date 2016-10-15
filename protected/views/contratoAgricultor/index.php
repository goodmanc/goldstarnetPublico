<?php
/* @var $this ContratoAgricultorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contrato Agricultor',
);
$controllerID = $this->id;
$this->menu=array(
//	array('label'=>'Crear ContratoAgricultor', 'url'=>'javascript:create();'),
//	array('label'=>'Administrar ContratoAgricultor', 'url'=>array('admin')),
);

?>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h1>Contrato Agricultor</h1>
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


                            <?php $this->widget('zii.widgets.grid.CGridView', array(
                            'id'=>'contrato-agricultor-grid',
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
                                    'header' => 'FN',
                                    'class'=>'CButtonColumn',
                                    'headerHtmlOptions'=>array('style'=>'text-align:center;'),
                                    'template'=>'<div style="text-align:center;">{view}</div>',
                                    'buttons'=>array(
                                        'view' => array(
                                            'label'=>'View', 
                                            'imageUrl'=>Yii::app()->request->baseUrl.'/images/led-icons/magnifier.png',  
                                            'url'=>'Yii::app()->createUrl("'.$controllerID.'/view/?id=$data->id")',
                                            'click'=>"function(){
                                                        view($(this).attr('href'));    
                                                    return false;
                                            }",
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
			'name'=>'nombre',
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
		/*
		array(
			'name'=>'temporada_id',
			'header'=>'',
			'filter'=>CHtml::listData(Temporada::model()->findAll(), 'id', 'year'),
			'value'=>'$data->temporada==null ? null : $data->temporada->year'),
		array(
			'name'=>'contratoclientedetalle_id',
			'header'=>'',
			'filter'=>CHtml::listData(Contratoclientedetalle::model()->findAll(), 'id', 'oventa_id'),
			'value'=>'$data->contratoclientedetalle==null ? null : $data->contratoclientedetalle->oventa_id'),
		array(
			'name'=>'agricultor_id',
			'header'=>'',
			'filter'=>CHtml::listData(Agricultor::model()->findAll(), 'id', 'rut'),
			'value'=>'$data->agricultor==null ? null : $data->agricultor->rut'),
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
    var label ='Contrato Agricultor';
    var labelPlural ='Contrato Agricultors';
    var baseUrl = '/goldstarnetPublico/';
    var baseControllerUrl = baseUrl+'<?php echo Yii::app()->controller->id ?>';
    var queryString = '<?php echo Yii::app()->request->getQueryString(); ?>';    
    var baseImgsUrl = baseUrl+'/js/dhtmlx/imgs';
    var myRibbon;
    var myToolbar;

    function view(href) {
        dhxWins = new dhtmlXWindows();
        w1 = dhxWins.createWindow("w1", 230, 130, 960, 600);
        w1.setText("Ver "+label);
        w1.centerOnScreen();
        w1.attachURL(href)
    }

    function excel() {
        document.location.href = baseControllerUrl + '/excel?'+queryString;
    }    
    
    function startToolbar() {
        myToolbar = new dhtmlXToolbarObject({
                parent: "toolbarObj",
                icon_path: baseImgsUrl + "/common/imgs/",
                items: [
                        {type: "text", id: "info", text: "Toolbar"},
                        {type: "separator", id: "sep1"},
                        {type: "button", id: "excel", tooltip: "Descargar Excel", img: "../18/excel.png"},
                        {type: "separator", id: "sep5"},
                ]
        });
        myToolbar.attachEvent("onClick", function(id){
            switch (id) {
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
                    type: 'block', text: 'Básico', mode: 'cols', list: [
                        {type: 'button', id:'open', text: 'Open', img: "48/open.gif"},
                        {type: 'button', id:'new', text: 'new', img: "18/new.gif"},
                        {type: 'button', id:'cut', text: 'cut', img: "18/cut.gif"},
                    ]
                },
                {
                    type: 'block', text: 'Advanzado', mode: 'cols', list: [
                        {type: 'button', id:'excel', text: 'excel', img: "48/excel.png", isbig: true}
                    ]
                },
            ]
        };
        myRibbon = new dhtmlXRibbon(data);
        myRibbon.attachEvent("onClick", function(id){
            alert(id)
        });
        document.getElementById("ribbonObj").style.width = "100%";
        myRibbon.setSizes();
    }
    

    function startJS() {
//        startRibbon();
        startToolbar();
    }

    window.onload = startJS;
</script>