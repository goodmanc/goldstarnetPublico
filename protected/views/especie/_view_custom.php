<?php 
/* @var $this EspecieController */
/* @var $data Especie */

?>


<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Especie custom <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
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
			'name'=>'familia_id',
			'value'=>($model->familia !== null) ? CHtml::link($model->familia, array('/familia/view', 'id' => $model->familia->id)).' ' : null,
			'type'=>'html',
		),
                                                                    'nombre',
                                                                    'name',
                                                                                                                                                                                                                                                                                                                            ),
                                )); ?>
                        </div>
                        <div class="col-sm-4">
                                <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                                'data' => $model,
                                'htmlOptions' => array('class' => 'table table-striped responsive-table table-bordered'),
                                'attributes' => array(
                                                                                                                                                                                                                                        'status',
                                                                        array(
			'name'=>'used_by',
			'value'=>($model->usedBy !== null) ? CHtml::link($model->usedBy, array('/users/view', 'id' => $model->usedBy->id)).' ' : null,
			'type'=>'html',
		),
                                                                        'check_in',
                                                                        array(
			'name'=>'created_by',
			'value'=>($model->createdBy !== null) ? CHtml::link($model->createdBy, array('/users/view', 'id' => $model->createdBy->id)).' ' : null,
			'type'=>'html',
		),
                                                                        'created',
                                                                        array(
			'name'=>'modified_by',
			'value'=>($model->modifiedBy !== null) ? CHtml::link($model->modifiedBy, array('/users/view', 'id' => $model->modifiedBy->id)).' ' : null,
			'type'=>'html',
		),
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