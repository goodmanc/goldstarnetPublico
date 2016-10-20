<?php $this->widget('EExcelView', array(
                                'grid_mode'=>'export',
                                'dataProvider'=>$model->search(),
                                'filter'=>$model,
                                'title'=>"Cliente Contactos",
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
				'name'=>'primerNombre',
				),
			array(
				'name'=>'segundoNombre',
				),
			array(
				'name'=>'apellidos',
				),
			array(
				'name'=>'titulo',
				),
			array(
				'name'=>'posision',
				),
			array(
				'name'=>'direccion',
				),
			array(
				'name'=>'tel1',
				),
			array(
				'name'=>'tel2',
				),
			array(
				'name'=>'movil',
				),
			array(
				'name'=>'fax',
				),
			array(
				'name'=>'notas1',
				),
			array(
				'name'=>'notas2',
				),
			array(
				'name'=>'email',
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

