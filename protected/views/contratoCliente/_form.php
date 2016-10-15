<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */
/* @var $form CActiveForm */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'contrato-cliente-form',
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
                    <h5>ContratoCliente <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
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
                                <?php echo $form->dropDownListRow($model, 'temporada_id', CHtml::listData(Temporada::model()->findAll(), 'id', Temporada::representingColumn())); ?>
                		<?php echo $form->error($model,'temporada_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->dropDownListRow($model, 'cliente_id', CHtml::listData(Cliente::model()->findAll(), 'id', Cliente::representingColumn())); ?>
                		<?php echo $form->error($model,'cliente_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->dropDownListRow($model, 'proyecto_id', CHtml::listData(Proyecto::model()->findAll(), 'id', Proyecto::representingColumn())); ?>
                		<?php echo $form->error($model,'proyecto_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->datepickerRow($model, 'fecha', array('prepend'=>'<i class="icon-calendar"></i>')); ?>
                		<?php echo $form->error($model,'fecha'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'observaciones',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'observaciones'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'guarantee',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'guarantee'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'conditionsHeader',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'conditionsHeader'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'conditionsFooter',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'conditionsFooter'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'growerServices',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'growerServices'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'stockSeed',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'stockSeed'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'productionReports',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'productionReports'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'shipments',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'shipments'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'aditionalPhitosanitaryReq',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'aditionalPhitosanitaryReq'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'preShipmentsSeedSamples',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'preShipmentsSeedSamples'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'earlyTerminationBuyOut',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'earlyTerminationBuyOut'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'overProduction',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'overProduction'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'prices',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'prices'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'advancePayments',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'advancePayments'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'paymentTerms',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'paymentTerms'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'confidentiality',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'confidentiality'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'lotNumberAssignment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'lotNumberAssignment'); ?>
                            </div>

                          <div>
                                <?php echo $form->textAreaRow($model,'arbitrationAndLaw',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
                		<?php echo $form->error($model,'arbitrationAndLaw'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'buyerSigName', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'buyerSigName'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'growerSigName', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'growerSigName'); ?>
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