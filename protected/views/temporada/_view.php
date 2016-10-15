<?php 
/* @var $this TemporadaController */
/* @var $data Temporada */

?>


<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Temporada <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
]</small></h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-8 b-r">
                                <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                                'data' => $model,
                                'htmlOptions' => array('class' => 'table table-striped responsive-table table-bordered'),
                                'attributes' => array(
                                                                    'id',
                                                                    'year',
                                                                    'periodo',
                                                                    'CANCELED',
                                                                                                                                                                                                                                                                                                                            ),
                                )); ?>
                        </div>
                        <div class="col-sm-4">
                                <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                                'data' => $model,
                                'htmlOptions' => array('class' => 'table table-striped responsive-table table-bordered'),
                                'attributes' => array(
                                                                                                                                                                                                                                        'status',
                                                                        'used_by',
                                                                        'check_in',
                                                                        'created_by',
                                                                        'created',
                                                                        'modified_by',
                                                                        'modified',
                                                                ),
                                )); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>