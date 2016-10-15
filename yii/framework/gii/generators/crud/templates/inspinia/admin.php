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
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Manage',
);\n";
?>

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

<h1>Administrar <?php echo $this->pluralize($this->class2name($this->modelClass)); ?></h1>

<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
//-->

<?php /*echo "<?php echo CHtml::link('B�squeda  avanzada','#',array('class'=>'search-button')); ?>"; */?>

<div class="search-form" style="display:none">
<?php echo "<?php \$this->renderPartial('_search',array(
	'model'=>\$model,
)); ?>\n"; ?>
</div><!-- search-form -->

<?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
        'itemsCssClass'=>"table table-striped table-bordered table-hover table-condensed",
        'htmlOptions'=>array('class'=>''),   
        'ajaxUpdate'=>false,
        'pager'=>array('cssFile'=>false,
                       'header'=>'',
                       'firstPageLabel'=>'&lt;&lt;',
                       'prevPageLabel'=>'&lt;',
                       'nextPageLabel'=>'&gt;', 
                       'lastPageLabel'=>'&gt;&gt;',
                       'maxButtonCount'=>5,
                       'class'=>'CLinkPager'),
        'cssFile'=>false,
        'template'=>'<div class="gridHeader"></div><div class="table-responsive table-bordered">{items}</div><div class="gridFooter">{summary}{pager}</div>',
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
		),
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
	if(++$count==7)
		echo "\t\t/*\n";
        if ($column->isForeignKey) {
            $relation = CrudCode::findRelation($this->getModelClass(), $column);
            if ($relation[1] == AweActiveRecord::BELONGS_TO) {
                $relatedModelClass = $relation[3];
                $foreignPk = CActiveRecord::model($relatedModelClass)->getTableSchema()->primaryKey;
                foreach (CActiveRecord::model($relatedModelClass)->getTableSchema()->columns as $col) {
                    if (intval($col->isForeignKey) == 0 && intval($col->isPrimaryKey) == 0) {
                        echo "\t\tarray(\n"
                            ."\t\t\t'name'=>'{$column->name}',\n"
                            ."\t\t\t'filter'=>CHtml::listData(Familia::model()->findAll(), 'id', '{$col->name}'),\n"
                            ."\t\t\t'value'=>'\$data->".strtolower($relatedModelClass)."->{$col->name}'),\n";
                        break;
                    }
                }
            }
        }
        else {
            echo "\t\t'".$column->name."',\n";
        }
}
if($count>=7)
	echo "\t\t*/\n";
?>
	),
)); ?>

<script>
    var baseUrl = '<?php echo YII::app()->baseUrl .'/'; echo '<?php echo Yii::app()->controller->id ?>'; ?>';
    var winOpen = false;
    
    function create() {
        
        dhxWins = new dhtmlXWindows();

        w1 = dhxWins.createWindow("w1", 230, 130, 960, 600);
        w1.setText("Crear <? $label; ?>");
        w1.centerOnScreen();
        
        w1.attachURL(baseUrl + "/create")
        
    }
    
    function update(id) {
        
        dhxWins = new dhtmlXWindows();

        w1 = dhxWins.createWindow("w1", 230, 130, 960, 600);
        w1.setText("Crear <? $label; ?>");
        w1.centerOnScreen();
        
        w1.attachURL(baseUrl + "/update/" + id)
        
    }
    
</script>