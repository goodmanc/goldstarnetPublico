<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Especies",
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
				'name'=>'familia_id',
				'header'=>'Familia',
				'filter'=>CHtml::listData(Familia::model()->findAll(), 'id', 'nombre'),
				'value'=>'$data->familia==null ? null : $data->familia->nombre'),
			array(
				'name'=>'nombre',
			'header'=>'Nombre',
				),
			array(
				'name'=>'name',
			'header'=>'Name',
				),
			array(
				'name'=>'nombreCientifico',
			'header'=>'Nombre Científico',
				),
			array(
				'name'=>'status',
			'header'=>'Estado',
				),
	array(
				'name'=>'used_by',
				'header'=>'Usado por',
				'filter'=>CHtml::listData(Users::model()->findAll(), 'id', 'username'),
				'value'=>'$data->usedBy==null ? null : $data->usedBy->username'),
			array(
				'name'=>'check_in',
			'header'=>'Check IN',
				),
	array(
				'name'=>'created_by',
				'header'=>'Creado por',
				'filter'=>CHtml::listData(Users::model()->findAll(), 'id', 'username'),
				'value'=>'$data->createdBy==null ? null : $data->createdBy->username'),
			array(
				'name'=>'created',
			'header'=>'Creado el',
				),
	array(
				'name'=>'modified_by',
				'header'=>'Modificado por',
				'filter'=>CHtml::listData(Users::model()->findAll(), 'id', 'username'),
				'value'=>'$data->modifiedBy==null ? null : $data->modifiedBy->username'),
			array(
				'name'=>'modified',
			'header'=>'Modificado el',
				),
                            ),
                            )); ?>                        

