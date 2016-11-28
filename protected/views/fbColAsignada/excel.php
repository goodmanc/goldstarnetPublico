<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Fb Col Asignadas",
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
				'name'=>'fieldbook_id',
				'header'=>'',
				'filter'=>CHtml::listData(Fieldbook::model()->findAll(), 'id', 'nombre'),
				'value'=>'$data->fieldbook==null ? null : $data->fieldbook->nombre'),
	array(
				'name'=>'fbColumna_id',
				'header'=>'',
				'filter'=>CHtml::listData(Fbcolumna::model()->findAll(), 'id', 'fbGrupoColumna_id'),
				'value'=>'$data->fbColumna==null ? null : $data->fbColumna->fbGrupoColumna_id'),
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

