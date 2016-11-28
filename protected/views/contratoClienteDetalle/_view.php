<?php 
/* @var $this ContratoClienteDetalleController */
/* @var $data ContratoClienteDetalle */

?>


<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>ContratoClienteDetalle <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
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
			'name'=>'contratoCliente_id',
			'value'=>($model->contratoCliente !== null) ? CHtml::link($model->contratoCliente, array('/contratocliente/view', 'id' => $model->contratoCliente->id)).' ' : null,
			'type'=>'html',
		),
                                                                    array(
			'name'=>'variedad_id',
			'value'=>($model->variedad !== null) ? CHtml::link($model->variedad, array('/variedad/view', 'id' => $model->variedad->id)).' ' : null,
			'type'=>'html',
		),
                                                                    'subNumCat',
                                                                    'codigoGoldStar',
                                                                    'nombreExportacion',
                                                                    'baseRate',
                                                                    'hactares',
                                                                    'kgs',
                                                                    array(
			'name'=>'moneda_id',
			'value'=>($model->moneda !== null) ? CHtml::link($model->moneda, array('/moneda/view', 'id' => $model->moneda->id)).' ' : null,
			'type'=>'html',
		),
                                                                    'price',
                                                                    'lineTotal',
                                                                    'totalFrgn',
                                                                    'stockSeed',
                                                                    'proyect',
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