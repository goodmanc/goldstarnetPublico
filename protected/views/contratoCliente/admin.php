<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */

$this->breadcrumbs=array(
	'Contrato Clientes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar ContratoCliente', 'icon' => '<i class="fa fa-list-alt"></i>', 'url'=>array('index')),
	array('label'=>'Crear ContratoCliente', 'icon' => '<i class="fa fa-plus-square-o"></i>', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contrato-cliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Contrato Clientes</h1>

<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
//-->


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'contrato-cliente-grid',
        'itemsCssClass'=>"table table-striped table-bordered table-hover table-condensed",
        'htmlOptions'=>array('class'=>''),   
        'ajaxUpdate'=>false,
        'pager'=>array('cssFile'=>false,
                       'header'=>'',
                       'firstPageLabel'=>'&lt;&lt;',
                       'prevPageLabel'=>'&lt;',
                       'nextPageLabel'=>'&gt;', 
                       'lastPageLabel'=>'&gt;&gt;',
                       'maxButtonCount'=>5,
                       'class'=>'CLinkPager'),
        'cssFile'=>false,
        'template'=>'<div class="gridHeader"></div><div class="table-responsive table-bordered">{items}</div><div class="gridFooter">{summary}{pager}</div>',
        'summaryText' => 'Mostrando {start} - {end} de {count} registros',
        'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array(
                    'name' => 'check',
                    'id' => 'selectedIds',
                    'value' => '$data->id',
                    'class' => 'CCheckBoxColumn',
                    'selectableRows' => '100',                
                ),
		array(
                    'header' => 'FN',
                    'class'=>'CButtonColumn',
		),
		'id',
		'temporada_id',
		'cliente_id',
		'proyecto_id',
		'fecha',
		'observaciones',
		/*
		'guarantee',
		'conditionsHeader',
		'conditionsFooter',
		'growerServices',
		'stockSeed',
		'productionReports',
		'shipments',
		'aditionalPhitosanitaryReq',
		'preShipmentsSeedSamples',
		'earlyTerminationBuyOut',
		'overProduction',
		'prices',
		'advancePayments',
		'paymentTerms',
		'confidentiality',
		'lotNumberAssignment',
		'arbitrationAndLaw',
		'buyerSigName',
		'growerSigName',
		'status',
		'used_by',
		'check_in',
		'created_by',
		'created',
		'modified_by',
		'modified',
		*/
	),
)); ?>
