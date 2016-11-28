<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Contrato Agricultors",
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
				'header'=>'Temporada',
				'filter'=>CHtml::listData(Temporada::model()->findAll(), 'id', 'year'),
				'value'=>'$data->temporada==null ? null : $data->temporada->year'),
	array(
				'name'=>'agricultor_id',
				'header'=>'Agricultor',
				'filter'=>CHtml::listData(Agricultor::model()->findAll(), 'id', 'rut'),
				'value'=>'$data->agricultor==null ? null : $data->agricultor->rut'),
	array(
				'name'=>'especie_id',
				'header'=>'',
				'filter'=>CHtml::listData(Especie::model()->findAll(), 'id', 'familia_id'),
				'value'=>'$data->especie==null ? null : $data->especie->familia_id'),
	array(
				'name'=>'contratoclientedetalle_id',
				'header'=>'Variedad',
				'filter'=>CHtml::listData(Contratoclientedetalle::model()->findAll(), 'id', 'contratoCliente_id'),
				'value'=>'$data->contratoclientedetalle==null ? null : $data->contratoclientedetalle->contratoCliente_id'),
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

