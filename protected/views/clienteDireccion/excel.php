<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Cliente Direccions",
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
				'name'=>'cliente_id',
				'header'=>'',
				'filter'=>CHtml::listData(Cliente::model()->findAll(), 'id', 'rut'),
				'value'=>'$data->cliente==null ? null : $data->cliente->rut'),
			array(
				'name'=>'code',
				),
			array(
				'name'=>'calle',
				),
			array(
				'name'=>'poblacion',
				),
			array(
				'name'=>'ciudad',
				),
			array(
				'name'=>'pobox',
				),
			array(
				'name'=>'comuna',
				),
	array(
				'name'=>'pais_id',
				'header'=>'',
				'filter'=>CHtml::listData(Pais::model()->findAll(), 'id', 'nombre'),
				'value'=>'$data->pais==null ? null : $data->pais->nombre'),
			array(
				'name'=>'ref1',
				),
			array(
				'name'=>'ref2',
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

