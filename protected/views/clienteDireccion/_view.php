<?php 
/* @var $this ClienteDireccionController */
/* @var $data ClienteDireccion */

?>


<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>ClienteDireccion <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
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
			'name'=>'cliente_id',
			'value'=>($model->cliente !== null) ? CHtml::link($model->cliente, array('/cliente/view', 'id' => $model->cliente->id)).' ' : null,
			'type'=>'html',
		),
                                                                    'code',
                                                                    'calle',
                                                                    'poblacion',
                                                                    'ciudad',
                                                                    'pobox',
                                                                    'comuna',
                                                                    array(
			'name'=>'pais_id',
			'value'=>($model->pais !== null) ? CHtml::link($model->pais, array('/pais/view', 'id' => $model->pais->id)).' ' : null,
			'type'=>'html',
		),
                                                                    'ref1',
                                                                    'ref2',
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