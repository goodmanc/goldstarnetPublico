<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
$label = $this->class2name($this->modelClass);
$labelPlural = $this->pluralize($label);
?>
<?php echo "<?php"; ?> $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"<?php echo $this->pluralize($this->class2name($this->modelClass)); ?>",
                                'creator'=>'GoldStarNet',   
                                'autoWidth'=>true,   
                                'columns'=>array(
                            <?php
                            foreach ($this->tableSchema->columns as $column)
                            {
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
                                                echo "\tarray(\n"
                                                . "\t\t\t\t'name'=>'{$column->name}',\n"
                                                . "\t\t\t\t'header'=>'{$column->comment}',\n"
                                                . "\t\t\t\t'filter'=>CHtml::listData({$relatedModelClass}::model()->findAll(), 'id', '{$colName}'),\n"
                                                . "\t\t\t\t'value'=>'\$data->{$relatedRelation}==null ? null : \$data->{$relatedRelation}->{$colName}'),\n";
                                                break;
                                            }
                                        }
                                    }
                                } 
                                else if ($column->isPrimaryKey) {
                                    echo "\t\t\tarray(\n"
                                    . "\t\t\t\t'name'=>'{$column->name}',\n"
                                    . "\t\t\t\t'type'=>'html',\n"
                                    . "\t\t\t\t'htmlOptions'=>array('style'=>'word-wrap: break-word;'),\n"
                                    . "\t\t\t\t'headerHtmlOptions'=>array('style'=>'text-align:center;'),\n"
                                    . "\t\t\t\t'filterHtmlOptions'=>array('style'=>'width:70px'),\n"
                                    . "\t\t\t\t'value'=>'\"<div style=\\\"text-align:center;width:70px;\\\">\" . \$data[\"id\"] . \"</div>\"',\n"
                                    . "\t\t\t\t),\n";
                                } 
                                else {
                                    echo "\t\t\tarray(\n"
                                    . "\t\t\t\t'name'=>'{$column->name}',\n"
                                    . ($column->comment != null ? "\t\t\t'header'=>'{$column->comment}',\n" : "")
                                    . "\t\t\t\t),\n";
                                }
                            }
                            ?>
                            ),
                            )); ?>                        

