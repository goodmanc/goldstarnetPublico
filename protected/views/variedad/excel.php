<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Variedads",
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
				'name'=>'especie_id',
				'header'=>'',
				'filter'=>CHtml::listData(Especie::model()->findAll(), 'id', 'familia_id'),
				'value'=>'$data->especie==null ? null : $data->especie->familia_id'),
	array(
				'name'=>'cliente_id',
				'header'=>'',
				'filter'=>CHtml::listData(Cliente::model()->findAll(), 'id', 'nombre'),
				'value'=>'$data->cliente==null ? null : $data->cliente->nombre'),
			array(
				'name'=>'codigoGoldStar',
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

