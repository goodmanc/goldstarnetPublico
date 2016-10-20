<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Catalogos",
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
				'name'=>'variedad_id',
				'header'=>'',
				'filter'=>CHtml::listData(Variedad::model()->findAll(), 'id', 'especie_id'),
				'value'=>'$data->variedad==null ? null : $data->variedad->especie_id'),
			array(
				'name'=>'substitute',
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

