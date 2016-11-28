<?php 
/* @var $this ContratoClienteController */
/* @var $data ContratoCliente */

?>


<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>ContratoCliente <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
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
			'name'=>'temporada_id',
			'value'=>($model->temporada !== null) ? CHtml::link($model->temporada, array('/temporada/view', 'id' => $model->temporada->id)).' ' : null,
			'type'=>'html',
		),
                                                                    array(
			'name'=>'cliente_id',
			'value'=>($model->cliente !== null) ? CHtml::link($model->cliente, array('/cliente/view', 'id' => $model->cliente->id)).' ' : null,
			'type'=>'html',
		),
                                                                    array(
			'name'=>'proyecto_id',
			'value'=>($model->proyecto !== null) ? CHtml::link($model->proyecto, array('/proyecto/view', 'id' => $model->proyecto->id)).' ' : null,
			'type'=>'html',
		),
                                                                    'fecha',
                                                                    'observaciones',
                                                                    'guarantee',
                                                                    'conditionsHeader',
                                                                    'conditionsFooter',
                                                                    'growerServices',
                                                                    'stockSeed',
                                                                    'productionReports',
                                                                    'shipments',
                                                                    'aditionalPhitosanitaryReq',
                                                                    'preShipmentsSeedSamples',
                                                                    'earlyTerminationBuyOut',
                                                                    'overProduction',
                                                                    'prices',
                                                                    'advancePayments',
                                                                    'paymentTerms',
                                                                    'confidentiality',
                                                                    'lotNumberAssignment',
                                                                    'arbitrationAndLaw',
                                                                    'buyerSigName',
                                                                    'growerSigName',
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