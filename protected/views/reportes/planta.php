<?php
/* @var $this ReportesController */
/* @var $model Reporte */

$label = 'Reporte';
$labelPlural = 'Reportes';
$this->breadcrumbs=array(
	'Reporte'=>array('index'),
	'Reportes de Planta',
);
$controllerID = $this->id;
$this->menu=array(
array('label'=>'Listar Reporte', 'icon' => '<i class="fa fa-list-alt"></i>', 'url'=>array('index')),
array('label'=>'Crear Reporte', 'icon' => '<i class="fa fa-plus-square-o"></i>', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#especie-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<div class="row wrapper border-bottom yellow-bg page-heading">
    <div class="col-lg-6">
        <h1>Reportes de Planta</h1>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,'tagName'=>'ol'
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
                <div class="ibox-tools" style="display:none;">
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

                            <div class="alert alert-danger">
                                Módulo en Desarrollo. 
                            </div>


</div><!-- search-form -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    
    var label ='Reporte';
    var labelPlural ='Reportes';
    var baseUrl = '/goldstarnetPublico/';
    var baseControllerUrl = baseUrl+'/<?php echo Yii::app()->controller->id ?>';
    var queryString = '<?php echo Yii::app()->request->getQueryString(); ?>';   
    var baseImgsUrl = baseUrl+'/js/dhtmlx/imgs';
    var myRibbon;

    function create() {
        dhxWins = new dhtmlXWindows();
        w1 = dhxWins.createWindow('w1', 230, 130, 960, 600);
        w1.setText('Crear '+label);
        w1.centerOnScreen();
        w1.attachURL(baseControllerUrl + '/create')
    }

    function view(href) {
        dhxWins = new dhtmlXWindows();
        w1 = dhxWins.createWindow('w1', 230, 130, 960, 600);
        w1.setText('Ver '+label);
        w1.centerOnScreen();
        w1.attachURL(href)
    }

    function update(href) {
        dhxWins = new dhtmlXWindows();
        w1 = dhxWins.createWindow('w1', 230, 130, 960, 600);
        w1.setText('Modificar '+label);
        w1.centerOnScreen();
        w1.attachURL(href)
    }

    function excel() {
        document.location.href = baseControllerUrl + '/excel?'+queryString;
    } 
    
    function startToolbar() {
        var sep = 1;
        myToolbar = new dhtmlXToolbarObject({
                parent: 'toolbarObj',
                icon_path: baseImgsUrl + '/common/imgs/',
                items: [
                        {type: 'button', id: 'create', text: 'Crear', title: 'Crear', img: 'new.gif'},
                        {type: 'separator', id: 'sep'+sep++},
                        {type: 'button', id: 'excel', text: 'Descargar Excel', title: 'Descargar Excel', img: '../18/excel.png'},
                        {type: 'separator', id: 'sep'+sep++},
                ]
        });
        myToolbar.attachEvent('onClick', function(id){
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
            parent: 'ribbonObj',
            icons_path: baseImgsUrl + '/common/',
            items: [
                {
                    type: 'block', list: [
                        {type: 'button', text: 'Excel', img: '48/excel.png', isbig: true}
                    ]}
            ]
        };
        var w = data.items.length*80;
        myRibbon = new dhtmlXRibbon(data);
        // if you change parent's size
        document.getElementById('ribbonObj').style.width = w+'px';
//        document.getElementById('ribbonObj').style.height = '100%';

        // tabbar needs to be adjusted
        myRibbon.setSizes();
    }
    
    

    function startJS() {
//        startRibbon();
        startToolbar();
    }

    window.onload = startJS;

</script>