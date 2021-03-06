<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label = $this->class2name($this->modelClass);
$labelPlural = $this->pluralize($label);
echo "\$label = '{$label}';
\$labelPlural = '{$labelPlural}';
\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Administración',
);\n";
?>
$controllerID = $this->id;
$this->menu=array(
array('label'=>'Listar <?php echo $this->modelClass; ?>', 'icon' => '<i class="fa fa-list-alt"></i>', 'url'=>array('index')),
array('label'=>'Crear <?php echo $this->modelClass; ?>', 'icon' => '<i class="fa fa-plus-square-o"></i>', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#<?php echo $this->class2id($this->modelClass); ?>-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<div class="row wrapper border-bottom white-bg page-heading">
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


<?php /* echo "<?php echo CHtml::link('Búsqueda  avanzada','#',array('class'=>'search-button')); ?>"; */ ?>

<div class="search-form" style="display:none">
    <?php echo "<?php \$this->renderPartial('_search',array(
	'model'=>\$model,
)); ?>\n"; ?>
</div><!-- search-form -->

<?php echo "<?php"; ?> 
    $this->widget('zii.widgets.grid.CGridView', array(
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
//                                    . "\t\t\t'filterHtmlOptions'=>array('style'=>'width:70px'),\n"
                                    . "\t\t\t'value'=>'\"<div style=\\\"text-align:center;\\\">\" . \$data[\"id\"] . \"</div>\"',\n"
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
    var baseControllerUrl = baseUrl+'/<?php echo '<?php echo Yii::app()->controller->id ?>'; ?>';
    var queryString = '<?php echo '<?php echo Yii::app()->request->getQueryString(); ?>'; ?>';   
    var baseImgsUrl = baseUrl+'/js/dhtmlx/imgs';
    var myRibbon;
    var winCreate, winView, winUpdate;

    function create() {
        dhxWins = new dhtmlXWindows();
        winCreate = dhxWins.createWindow('winCreate', 230, 130, 960, 600);
        winCreate.setText('Crear '+label);
        winCreate.centerOnScreen();
        winCreate.attachURL(baseControllerUrl + '/create')
    }

    function view(href) {
        dhxWins = new dhtmlXWindows();
        winView = dhxWins.createWindow('winView', 230, 130, 960, 600);
        winView.setText('Ver '+label);
        winView.centerOnScreen();
        winView.attachURL(href)
    }

    function update(href) {
        dhxWins = new dhtmlXWindows();
        winUpdate = dhxWins.createWindow('winUpdate', 230, 130, 960, 600);
        winUpdate.setText('Modificar '+label);
        winUpdate.centerOnScreen();
        winUpdate.attachURL(href)
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