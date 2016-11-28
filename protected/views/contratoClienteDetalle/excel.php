<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Contrato Cliente Detalles",
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
//	array(
//				'name'=>'contratoCliente_id',
//				'header'=>'',
//				'filter'=>CHtml::listData(Contratocliente::model()->findAll(), 'id', 'temporada_id'),
//				'value'=>'$data->contratoCliente==null ? null : $data->contratoCliente->temporada_id'),
	array(
				'name'=>'variedad_id',
				'header'=>'',
				'filter'=>CHtml::listData(Variedad::model()->findAll(), 'id', 'nombre'),
				'value'=>'$data->variedad==null ? null : $data->variedad->nombre'),
			array(
				'name'=>'subNumCat',
				),
			array(
				'name'=>'codigoGoldStar',
				),
			array(
				'name'=>'nombreExportacion',
				),
			array(
				'name'=>'baseRate',
				),
			array(
				'name'=>'hactares',
				),
			array(
				'name'=>'kgs',
				),
	array(
				'name'=>'moneda_id',
				'header'=>'',
				'filter'=>CHtml::listData(Moneda::model()->findAll(), 'id', 'nombre'),
				'value'=>'$data->moneda==null ? null : $data->moneda->nombre'),
			array(
				'name'=>'price',
				),
			array(
				'name'=>'lineTotal',
				),
			array(
				'name'=>'totalFrgn',
				),
			array(
				'name'=>'stockSeed',
				),
			array(
				'name'=>'proyect',
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

