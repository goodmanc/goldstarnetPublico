<?php

//    if(isset($_GET['ContratoClienteDetalle']))
//            $child_model->attributes=$_GET['ContratoClienteDetalle'];
    $child_model->attributes=array("contratoCliente_id"=>$parentID);
    $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'child-grid',
        
    'itemsCssClass'=>"table table-striped table-bordered table-hover table-condensed",
      'htmlOptions'=>array('class'=>''),   
      'ajaxUpdate'=>true,
      'pager'=>array(
          'cssFile'=>false,
          'header'=>'',
          'firstPageLabel'=>'&lt;&lt;',
          'prevPageLabel'=>'Anterior',
          'nextPageLabel'=>'Siguiente', 
          'lastPageLabel'=>'&gt;&gt;',
          'maxButtonCount'=>5,
          'class'=>'CLinkPager',
          'htmlOptions'=>array('class'=>'pagination pull-right')
    ),
    'template'=>'<div class="gridHeader"></div><div class="table-responsive table-bordered">{items}</div><div class="gridFooter"><div class="row"><div class="cols-lg-6 pull-right">{pager}</div><div class="cols-lg-6">{summary}</div></div></div>',
    'summaryText' => 'Mostrando {start} - {end} de {count} registros',
    'dataProvider'=>$child_model->search(),
    'filter'=>$child_model,        
        
//    'model'=>$child_model,
//    'filter'=>$child_model->findAllByAttributes(array("contratoCliente_id"=>$parentID)),
    'columns'=>array(
        array(
            'header' => 'FN',
            'class'=>'CButtonColumn',
            'headerHtmlOptions'=>array('style'=>'text-align:center;'),
            'template'=>'<div style="text-align:center;width:70px;">{view}</div>',
            'buttons'=>array(
                'view' => array(
                    'label'=>'View', 
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/led-icons/magnifier.png',  
                    'url'=>'Yii::app()->createUrl("contratoclientedetalle/view/?id=$data->id")',
                    'click'=>"function(){
                                view($(this).attr('href'));    
                            return false;
                    }",
                ),
            ),                    
        ),
 	array(
            'header' => 'ID',
                'name'=>'id',
                'type'=>'html',
                'htmlOptions'=>array('style'=>'word-wrap: break-word;'),
                'headerHtmlOptions'=>array('style'=>'text-align:center;'),
                'filterHtmlOptions'=>array('style'=>'width:70px'),
                'value'=>'"<div style=\"text-align:center;width:70px;\">" . $data->id . "</div>"',
                ),
//        array(
//                'name'=>'contratoCliente_id',
//                ),
        array(
                'name'=>'variedad_id',
                'header'=>'Variedad',
                'filter'=>CHtml::listData(Variedad::model()->findAll(), 'id', 'nombre'),
                'value'=>'$data->variedad==null ? null : $data->variedad->nombre'),
        array(
                'name'=>'subNumCat',
                ),
        array(
                'name'=>'codigoGoldStar',
                ),
        array(
                'name'=>'nombreExportacion',
                ),
        array(
                'name'=>'baseRate',
                ),
        array(
                'name'=>'has',
                ),
        array(
                'name'=>'kgs',
                ),
        array(
                'name'=>'moneda_id',
                'header'=>'',
                'filter'=>CHtml::listData(Moneda::model()->findAll(), 'id', 'nombre'),
                'value'=>'$data->moneda==null ? null : $data->moneda->nombre'),
        array(
                'name'=>'price',
                ),
        array(
                'name'=>'lineTotal',
                ),
        array(
                'name'=>'totalFrgn',
                ),
        array(
                'name'=>'stockSeed',
                ),
        array(
                'name'=>'status',
                ),
        /*
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
        */
    ),
));
?>