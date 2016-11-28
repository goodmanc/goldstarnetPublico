<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Fieldbooks",
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
				'name'=>'nombre',
				),
	array(
				'name'=>'familia_id',
				'header'=>'',
				'filter'=>CHtml::listData(Familia::model()->findAll(), 'id', 'nombre'),
				'value'=>'$data->familia==null ? null : $data->familia->nombre'),
	array(
				'name'=>'temporada_id',
				'header'=>'',
				'filter'=>CHtml::listData(Temporada::model()->findAll(), 'id', 'year'),
				'value'=>'$data->temporada==null ? null : $data->temporada->year'),
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

