<?php 
/* @var $this ContratoAgricultorController */
/* @var $data ContratoAgricultor */

?>


<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>ContratoAgricultor <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
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
                                                                    'nombre',
                                                                                                                                                                                                                                                                                                                                array(
			'name'=>'temporada_id',
			'value'=>($model->temporada !== null) ? CHtml::link($model->temporada, array('/temporada/view', 'id' => $model->temporada->id)).' ' : null,
			'type'=>'html',
		),
                                                                    array(
			'name'=>'contratoclientedetalle_id',
			'value'=>($model->contratoclientedetalle !== null) ? CHtml::link($model->contratoclientedetalle, array('/contratoclientedetalle/view', 'id' => $model->contratoclientedetalle->id)).' ' : null,
			'type'=>'html',
		),
                                                                    array(
			'name'=>'agricultor_id',
			'value'=>($model->agricultor !== null) ? CHtml::link($model->agricultor, array('/agricultor/view', 'id' => $model->agricultor->id)).' ' : null,
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