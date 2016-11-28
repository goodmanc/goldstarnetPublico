<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php \n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $data <?php echo $this->getModelClass(); ?> */

?>


<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $this->modelClass; ?> <small>[<?php echo "<?php echo \$model->isNewRecord ? 'New' : 'View'; ?>\n"; ?>]</small></h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-8 b-r">
                                <?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbDetailView',array(
                                'data' => $model,
                                'htmlOptions' => array('class' => 'table table-striped responsive-table table-bordered'),
                                'attributes' => array(
                                <?php foreach ($this->tableSchema->columns as $column): ?>
                                    <?php 
                                        if (in_array($column->name, $this->commonFields)) {
                                            continue;
                                        }                                    
                                    echo $this->generateDetailViewAttribute($this->modelClass, $column) . ",\n" ?>
                                <?php endforeach; ?>
                                ),
                                )); ?>
                        </div>
                        <div class="col-sm-4">
                                <?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbDetailView',array(
                                'data' => $model,
                                'htmlOptions' => array('class' => 'table table-striped responsive-table table-bordered'),
                                'attributes' => array(
                                <?php foreach ($this->tableSchema->columns as $column): ?>
                                        <?php
                                        if (!in_array($column->name, $this->commonFields)) {
                                            continue;
                                        }
                                        echo $this->generateDetailViewAttribute($this->modelClass, $column) . ",\n" ?>
                                <?php endforeach; ?>
                                ),
                                )); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>