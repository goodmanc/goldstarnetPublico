<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Clientes",
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
				'name'=>'rut',
			'header'=>'RUT',
				),
			array(
				'name'=>'nombre',
			'header'=>'Nombre',
				),
			array(
				'name'=>'nombreCorto',
				),
			array(
				'name'=>'abrev',
			'header'=>'Abreviatura',
				),
	array(
				'name'=>'pais_id',
				'header'=>'',
				'filter'=>CHtml::listData(Pais::model()->findAll(), 'id', 'nombre'),
				'value'=>'$data->pais==null ? null : $data->pais->nombre'),
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

