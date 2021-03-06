<?php
/* @var $this FieldbookController */
/* @var $model Fieldbook */
/* @var $form CActiveForm */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'fieldbook-form',
    'enableAjaxValidation' => true,
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
                <h5>Fieldbook <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>]</small></h5>
                <p class="note">Fields with <span class="required">*</span> are required.</p>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-6 b-r">
                        <div>
                            <?php echo $form->error($model, 'nombre'); ?>
                        </div>                            
                        <div>
                            <?php echo $form->textFieldRow($model, 'nombre', array('class' => 'span5', 'maxlength' => 50)); ?>
                            <?php echo $form->error($model, 'nombre'); ?>
                        </div>

                        <div>
                            <?php echo $form->dropDownListRow($model, 'familia_id', CHtml::listData(Familia::model()->findAll(), 'id', Familia::representingColumn())); ?>
                            <?php echo $form->error($model, 'familia_id'); ?>
                        </div>


                    </div>
                    <div class="col-sm-6">
                        <div>
                            <?php echo $form->dropDownListRow($model, 'temporada_id', CHtml::listData(Temporada::model()->findAll(), 'id', Temporada::representingColumn())); ?>
                            <?php echo $form->error($model, 'temporada_id'); ?>
                        </div>

                        <div>
                            <?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 1)); ?>
                            <?php echo $form->error($model, 'status'); ?>
                        </div>
                        <?php echo $form->errorSummary($model); ?>
                    </div>

                    <div class="col-sm-12">
                        <div id="gridDetails">
                            <?php
                            if (!$model->isNewRecord)
                                $this->renderPartial('//dhtmlx/gridbox_toolbar', array(
                                    'model' => $child_model,
                                    'parentID' => $model->id,
                                    'controllerID' => 'fbcolasignada',
                                    'grid_data' => '/fieldbook/grid_data/?id=' . $model->id,
                                    'grid_data_dp' => '/fieldbook/grid_data/',
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

<script type="text/javascript" charset="utf-8">

    var myEditor;

    function doOnLoad() {
        startForm();
        try {
            startDhtml();
        } catch (e) {
        }
    }

    function startForm() {

    }

    function addRowGrid(grid, id) {
        var combo = grid.getCombo(3);
        var sel = combo.getKeys()[0];
        grid.addRow((new Date()).valueOf(), ['', null, '<?php echo $model->id; ?>', sel, 'G']);
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

    document.onload = doOnLoad();

</script>

<?php $this->endWidget(); ?>
