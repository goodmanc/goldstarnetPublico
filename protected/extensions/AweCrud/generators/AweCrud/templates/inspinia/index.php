<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $dataProvider CActiveDataProvider */

<?php
$label = $this->class2name($this->modelClass);
$labelPlural = $this->pluralize($label);
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>
$controllerID = $this->id;
$this->menu=array(
//	array('label'=>'Crear <?php echo $this->modelClass; ?>', 'url'=>'javascript:create();'),
//	array('label'=>'Administrar <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);

?>

<div class="row wrapper border-bottom yellow-bg page-heading">
    <div class="col-lg-6">
        <h1><?php echo $label; ?></h1>
        <?php echo "<?php \$this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>\$this->breadcrumbs,'tagName'=>'ol'
        ));
        ?>";
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


                            <?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
                            'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
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

                            <?php
                            $count = 0;
                            foreach ($this->tableSchema->columns as $column)
                            {
                                if (++$count == 10)
                                    echo "\t\t/*\n";
                                if ($column->isForeignKey)
                                {
                                    $relation = CrudCode::findRelation($this->getModelClass(), $column);
                                    if ($relation[1] == AweActiveRecord::BELONGS_TO)
                                    {
                                        $relatedRelation = $relation[0];
                                        $relatedModelClass = $relation[3];
                                        $foreignPk = CActiveRecord::model($relatedModelClass)->getTableSchema()->primaryKey;
                                        foreach (CActiveRecord::model($relatedModelClass)->getTableSchema()->columns as $col)
                                        {
                                            if (intval($col->isForeignKey) == 0)
                                            {
                                                $colName = CActiveRecord::model($relatedModelClass)->getTableSchema()->columns[array_keys(CActiveRecord::model($relatedModelClass)->getTableSchema()->columns)[1]]->name;
                                                echo "\t\tarray(\n"
                                                . "\t\t\t'name'=>'{$column->name}',\n"
                                                . "\t\t\t'header'=>'{$column->comment}',\n"
                                                . "\t\t\t'filter'=>CHtml::listData({$relatedModelClass}::model()->findAll(), 'id', '{$colName}'),\n"
                                                . "\t\t\t'value'=>'\$data->{$relatedRelation}==null ? null : \$data->{$relatedRelation}->{$colName}'),\n";
                                                break;
                                            }
                                        }
                                    }
                                } 
                                else if ($column->isPrimaryKey) {
                                    echo "\t\tarray(\n"
                                    . "\t\t\t'name'=>'{$column->name}',\n"
                                    . "\t\t\t'type'=>'html',\n"
                                    . "\t\t\t'htmlOptions'=>array('style'=>'word-wrap: break-word;'),\n"
                                    . "\t\t\t'headerHtmlOptions'=>array('style'=>'text-align:center;'),\n"
                                    . "\t\t\t'filterHtmlOptions'=>array('style'=>'width:70px'),\n"
                                    . "\t\t\t'value'=>'\"<div style=\\\"text-align:center;width:70px;\\\">\" . \$data[\"id\"] . \"</div>\"',\n"
                                    . "\t\t\t),\n";
                                } 
                                else {
                                    echo "\t\tarray(\n"
                                    . "\t\t\t'name'=>'{$column->name}',\n"
                                    . ($column->comment != null ? "\t\t\t'header'=>'{$column->comment}',\n" : "")
                                    . "\t\t\t),\n";
                                }
                            }
                            if ($count >= 10)
                                echo "\t\t*/\n";
                            ?>
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
    var label ='<?php echo $label; ?>';
    var labelPlural ='<?php echo $labelPlural; ?>';
    var baseControllerUrl = baseUrl+'<?php echo '<?php echo Yii::app()->controller->id ?>'; ?>';
    var queryString = '<?php echo '<?php echo Yii::app()->request->getQueryString(); ?>'; ?>';    
    var baseImgsUrl = baseUrl+'/js/dhtmlx/imgs';
    var myRibbon;
    var myToolbar;

    function view(href) {
        dhxWins = new dhtmlXWindows();
        w1 = dhxWins.createWindow('w1', 230, 130, 960, 600);
        w1.setText('Ver '+label);
        w1.centerOnScreen();
        w1.attachURL(href)
    }

    function excel() {
        document.location.href = baseControllerUrl + '/excel?'+queryString;
    }    
    
    function startToolbar() {
        myToolbar = new dhtmlXToolbarObject({
                parent: 'toolbarObj',
                icon_path: baseImgsUrl + '/common/imgs/',
                items: [
                        {type: 'button', id: 'excel', text: 'Descargar Excel', title: 'Descargar Excel', img: '../18/excel.png'},
                        {type: 'separator', id: 'sep5'},
                ]
        });
        myToolbar.attachEvent('onClick', function(id){
            switch (id) {
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
                    type: 'block', text: 'Básico', mode: 'cols', list: [
                        {type: 'button', id:'open', text: 'Open', img: '48/open.gif'},
                        {type: 'button', id:'new', text: 'new', img: '18/new.gif'},
                        {type: 'button', id:'cut', text: 'cut', img: '18/cut.gif'},
                    ]
                },
                {
                    type: 'block', text: 'Advanzado', mode: 'cols', list: [
                        {type: 'button', id:'excel', text: 'excel', img: '48/excel.png', isbig: true}
                    ]
                },
            ]
        };
        myRibbon = new dhtmlXRibbon(data);
        myRibbon.attachEvent('onClick', function(id){
            alert(id)
        });
        document.getElementById('ribbonObj').style.width = '100%';
        myRibbon.setSizes();
    }
    

    function startJS() {
//        startRibbon();
        startToolbar();
    }

    window.onload = startJS;
</script>