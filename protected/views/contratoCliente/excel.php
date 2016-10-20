<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Contrato Clientes",
                                'creator'=>'GoldStarNet',   
                                'autoWidth'=>true,   
                                'columns'=>array(
                            			array(
				'name'=>'id',
				'type'=>'html',
				'htmlOptions'=>array('style'=>'word-wrap: break-word;'),
				'headerHtmlOptions'=>array('style'=>'text-align:center;'),
				'filterHtmlOptions'=>array('style'=>'width:70px'),
				'value'=>'"<div style=\"text-align:center;width:70px;\">" . $data["id"] . "</div>"',
				),
	array(
				'name'=>'temporada_id',
				'header'=>'',
				'filter'=>CHtml::listData(Temporada::model()->findAll(), 'id', 'year'),
				'value'=>'$data->temporada==null ? null : $data->temporada->year'),
	array(
				'name'=>'cliente_id',
				'header'=>'',
				'filter'=>CHtml::listData(Cliente::model()->findAll(), 'id', 'rut'),
				'value'=>'$data->cliente==null ? null : $data->cliente->rut'),
	array(
				'name'=>'proyecto_id',
				'header'=>'',
				'filter'=>CHtml::listData(Proyecto::model()->findAll(), 'id', 'nombre'),
				'value'=>'$data->proyecto==null ? null : $data->proyecto->nombre'),
			array(
				'name'=>'fecha',
				),
			array(
				'name'=>'observaciones',
				),
			array(
				'name'=>'guarantee',
				),
			array(
				'name'=>'conditionsHeader',
				),
			array(
				'name'=>'conditionsFooter',
				),
			array(
				'name'=>'growerServices',
				),
			array(
				'name'=>'stockSeed',
				),
			array(
				'name'=>'productionReports',
				),
			array(
				'name'=>'shipments',
				),
			array(
				'name'=>'aditionalPhitosanitaryReq',
				),
			array(
				'name'=>'preShipmentsSeedSamples',
				),
			array(
				'name'=>'earlyTerminationBuyOut',
				),
			array(
				'name'=>'overProduction',
				),
			array(
				'name'=>'prices',
				),
			array(
				'name'=>'advancePayments',
				),
			array(
				'name'=>'paymentTerms',
				),
			array(
				'name'=>'confidentiality',
				),
			array(
				'name'=>'lotNumberAssignment',
				),
			array(
				'name'=>'arbitrationAndLaw',
				),
			array(
				'name'=>'buyerSigName',
				),
			array(
				'name'=>'growerSigName',
				),
			array(
				'name'=>'status',
				),
			array(
				'name'=>'used_by',
				),
			array(
				'name'=>'check_in',
				),
			array(
				'name'=>'created_by',
				),
			array(
				'name'=>'created',
				),
			array(
				'name'=>'modified_by',
				),
			array(
				'name'=>'modified',
				),
                            ),
                            )); ?>                        

