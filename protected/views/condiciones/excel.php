<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Condiciones",
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
				'name'=>'contratoCliente_id',
				'header'=>'',
				'filter'=>CHtml::listData(Contratocliente::model()->findAll(), 'id', 'temporada_id'),
				'value'=>'$data->contratoCliente==null ? null : $data->contratoCliente->temporada_id'),
	array(
				'name'=>'condicion_id',
				'header'=>'',
				'filter'=>CHtml::listData(Condicion::model()->findAll(), 'id', 'nombre'),
				'value'=>'$data->condicion==null ? null : $data->condicion->nombre'),
			array(
				'name'=>'valor',
				),
			array(
				'name'=>'prefix_copy1',
				),
			array(
				'name'=>'sufix',
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

