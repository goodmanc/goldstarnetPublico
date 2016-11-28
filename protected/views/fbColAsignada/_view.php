<?php 
/* @var $this FbColAsignadaController */
/* @var $data FbColAsignada */

?>


<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>FbColAsignada <small>[<?php echo $model->isNewRecord ? 'New' : 'View'; ?>
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
                                                                    array(
			'name'=>'fieldbook_id',
			'value'=>($model->fieldbook !== null) ? CHtml::link($model->fieldbook, array('/fieldbook/view', 'id' => $model->fieldbook->id)).' ' : null,
			'type'=>'html',
		),
                                                                    array(
			'name'=>'fbColumna_id',
			'value'=>($model->fbColumna !== null) ? CHtml::link($model->fbColumna, array('/fbcolumna/view', 'id' => $model->fbColumna->id)).' ' : null,
			'type'=>'html',
		),
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