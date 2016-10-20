<?php
/* @var $this ContratoClienteDetalleController */
/* @var $model ContratoClienteDetalle */
/* @var $form CActiveForm */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'contrato-cliente-detalle-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

<div class="form">


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        

<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>ContratoClienteDetalle <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
]</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <!--                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i class="fa fa-wrench"></i>
                                            </a>-->
                        <!--                    <ul class="dropdown-menu dropdown-user">
                                                <li><a href="#">Config option 1</a>
                                                </li>
                                                <li><a href="#">Config option 2</a>
                                                </li>
                                            </ul>-->
                        <a class="close-link">
                            <!--<i class="fa fa-times"></i>-->
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <div>
                                <?php echo $form->error($model, 'nombre'); ?>
                            </div>                            
                          <div>
                                <?php echo $form->textFieldRow($model, 'contratoCliente_id', array('class' => 'span5')); ?>
                		<?php echo $form->error($model,'contratoCliente_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->dropDownListRow($model, 'variedad_id', CHtml::listData(Variedad::model()->findAll(), 'id', Variedad::representingColumn())); ?>
                		<?php echo $form->error($model,'variedad_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'subNumCat', array('class' => 'span5', 'maxlength' => 30)); ?>
                		<?php echo $form->error($model,'subNumCat'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'codigoGoldStar', array('class' => 'span5', 'maxlength' => 40)); ?>
                		<?php echo $form->error($model,'codigoGoldStar'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'nombreExportacion', array('class' => 'span5', 'maxlength' => 40)); ?>
                		<?php echo $form->error($model,'nombreExportacion'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'baseRate', array('class' => 'span5')); ?>
                		<?php echo $form->error($model,'baseRate'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'hactares', array('class' => 'span5')); ?>
                		<?php echo $form->error($model,'hactares'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'kgs', array('class' => 'span5')); ?>
                		<?php echo $form->error($model,'kgs'); ?>
                            </div>

                          <div>
                                <?php echo $form->dropDownListRow($model, 'moneda_id', CHtml::listData(Moneda::model()->findAll(), 'id', Moneda::representingColumn())); ?>
                		<?php echo $form->error($model,'moneda_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'price', array('class' => 'span5')); ?>
                		<?php echo $form->error($model,'price'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'lineTotal', array('class' => 'span5')); ?>
                		<?php echo $form->error($model,'lineTotal'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'totalFrgn', array('class' => 'span5')); ?>
                		<?php echo $form->error($model,'totalFrgn'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'proyecto_id', array('class' => 'span5', 'maxlength' => 20)); ?>
                		<?php echo $form->error($model,'proyecto_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'stockSeed', array('class' => 'span5')); ?>
                		<?php echo $form->error($model,'stockSeed'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'proyect', array('class' => 'span5', 'maxlength' => 20)); ?>
                		<?php echo $form->error($model,'proyect'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 1)); ?>
                		<?php echo $form->error($model,'status'); ?>
                            </div>

                            <div class="buttons">
                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-primary btn-large pull-right m-t-n-xs")); ?>
                            </div>                    
                        </div>
                        <div class="col-sm-6">
                            <h4>Mensajes del sistema</h4>
                            <?php echo $form->errorSummary($model); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->