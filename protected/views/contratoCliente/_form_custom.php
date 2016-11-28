<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */
/* @var $form CActiveForm */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'contrato-cliente-form',
    'enableAjaxValidation' => false,
    'enableClientValidation' => false,
        ));
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/dhtmlx/dhtmlx.css">

<div class="form">

    <div class="sr-only">
        <?php echo $form->inputRow('text', $model, 'id', $model->id, array('class' => '')); ?>
    </div>

    <?php echo $form->errorSummary($model); ?>

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Contrato Cliente <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>]</small></h5> 
                <p class="note">&nbsp;&nbsp;(Fields with <span class="required">*</span> are required.)</p>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> Datos Generales</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Status</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <div>
                                            <?php echo $form->dropDownListRow($model, 'temporada_id', CHtml::listData(Temporada::model()->findAll(), 'id', Temporada::representingColumn())); ?>
                                            <?php echo $form->error($model, 'temporada_id'); ?>
                                        </div>

                                        <div>
                                            <?php echo $form->dropDownListRow($model, 'cliente_id', CHtml::listData(Cliente::model()->findAll(), 'id', Cliente::representingColumn())); ?>
                                            <?php echo $form->error($model, 'cliente_id'); ?>
                                        </div>
                                        <div>
                                            <?php echo $form->dropDownListRow($model, 'proyecto_id', CHtml::listData(Proyecto::model()->findAll(), 'id', Proyecto::representingColumn())); ?>
                                            <?php echo $form->error($model, 'proyecto_id'); ?>
                                        </div>

                                        <div>
                                            <?php echo $form->dateField($model, 'fecha', array('prepend' => '<i class="icon-calendar"></i>')); ?>
                                            <?php echo $form->error($model, 'fecha'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">
                                        <div>
                                            <?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 1)); ?>
                                            <?php echo $form->error($model, 'status'); ?>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <br />
                    </div>                        


                    <div class="col-sm-6">
                        <div>
                            <?php echo $form->textAreaRow($model, 'observaciones', array('rows' => 6, 'cols' => 50, 'class' => 'span8', 'style' => 'display:none;')); ?>
                            <div id="editorObj"></div>
                            <?php echo $form->error($model, 'observaciones'); ?>
                            <br />
                        </div>
                        <!-- The childView <div>, renders the _child form, which contains the Child Gridview.
                        The ajax response will replace/update the whole <div> and not just the gridview. -->
                        <!--<div id="childView">
                        <?php
//        $this->renderPartial('//contratoclientedetalle/admin', array(
//        'model' => $child_model, 
//        'parentID' => $model->id, 
//        'controllerID'=>  'contratoclientedetalle',
//        'isHeader'=>false,
//        'isFilter'=>false,
//        'isListTitle'=>false,
//        ))
                        ?>
                        </div>
                        -->
                    </div>
                    <div class="col-sm-12">
                        <div id="gridDetails">
                            <?php
                            if (!$model->isNewRecord)
                            $this->renderPartial('//dhtmlx/gridbox_toolbar', array(
                                'model' => $child_model,
                                'parentID' => $model->id,
                                'controllerID' => 'contratoclientedetalle',
                                'grid_data' => '/contratocliente/grid_data/?id='.$model->id,
                                'grid_data_dp' => '/contratocliente/grid_data/',
                                'isHeader' => false,
                                'isFilter' => false,
                                'isListTitle' => false,
                            ))
                            ?>
                        </div>

                    </div>


                </div>
                <div class="row">
                    <div class="buttons">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class" => "btn btn-primary btn-large pull-right m-t-n-xs")); ?>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


</div>


<!-- form -->
<style>
    div#editorObj {
        width: 100%;
        height: 220px;
        border: 1px solid #dfdfdf;
    }
</style>

<script type="text/javascript" charset="utf-8">

    var myEditor;

    function doOnLoad() {
        startEditor();
        startForm();
        try {
            startDhtml();
        } catch (e) {
        }
    }
    
    function startForm() {
        
    }
    
    function addRowGrid(grid, id) {
//        configure('-', "id", "dhxRowNumber,id,contratoCliente_id,variedad_id,codigoGoldStar,nombreExportacion,moneda_id,has,kgs,price,lineTotal");
        grid.addRow((new Date()).valueOf(), ['', null, '<?php echo $model->id; ?>','','','','USD' ]);
    }
    

    function dp_end(node) {
        var type = node.getAttribute("type"); // my_error
        var rowID = node.getAttribute("sid"); // row_id
        var newRowID = node.getAttribute("tid"); // new row_id
        return false;
    }

    function dp_inserted(node) {
        var type = node.getAttribute("type"); // my_error
        var rowID = node.getAttribute("sid"); // row_id
        var newRowID = node.getAttribute("tid"); // new row_id
        mygrid.setRowId(mygrid.getRowIndex(rowID), newRowID);
        mygrid.cells(newRowID, mygrid.getColIndexById('id')).setValue(newRowID);
        dp.setUpdated(newRowID, false, "updated");        
        return false;
    }

    function dp_updated(node) {
        var type = node.getAttribute("type"); // my_error
        var rowID = node.getAttribute("sid"); // row_id
        var newRowID = node.getAttribute("tid"); // new row_id
        mygrid.setRowId(mygrid.getRowIndex(rowID), newRowID);
        mygrid.cells(newRowID, mygrid.getColIndexById('id')).setValue(newRowID);
        dp.setUpdated(newRowID, false, "updated");
        return false;
    }    
    
    function startEditor() {
        myEditor = new dhtmlXEditor({
            parent: "editorObj",
            toolbar: true, // force dhtmlxToolbar using
            iconsPath: baseUrl + '/js/dhtmlx/imgs', // path for toolbar icons
            skin: 'material',
            content: "<?php echo addslashes($model->observaciones); ?>"
        });
        myEditor.attachEvent("onAccess", function (eventName, evObj) {
            if (eventName === "blur") {
                $("textarea#ContratoCliente_observaciones").html(myEditor.getContent());
            }
        });
    }
    document.onload = doOnLoad();

</script>

<?php
$this->endWidget();
