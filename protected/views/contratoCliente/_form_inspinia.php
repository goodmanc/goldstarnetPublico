<?php
/* @var $this ContratoClienteController */
/* @var $model ContratoCliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        

<div class="form">


    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Especie <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
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
                                <?php echo $form->labelEx($model,'temporada_id'); ?>
                                <?php echo $form->textField($model,'temporada_id',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'temporada_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'cliente_id'); ?>
                                <?php echo $form->textField($model,'cliente_id',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'cliente_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'proyecto_id'); ?>
                                <?php echo $form->textField($model,'proyecto_id',array('size'=>20,'maxlength'=>20),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'proyecto_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'fecha'); ?>
                                <?php echo $form->textField($model,'fecha',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'fecha'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'observaciones'); ?>
                                <?php echo $form->textArea($model,'observaciones',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'observaciones'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'guarantee'); ?>
                                <?php echo $form->textArea($model,'guarantee',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'guarantee'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'conditionsHeader'); ?>
                                <?php echo $form->textArea($model,'conditionsHeader',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'conditionsHeader'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'conditionsFooter'); ?>
                                <?php echo $form->textArea($model,'conditionsFooter',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'conditionsFooter'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'growerServices'); ?>
                                <?php echo $form->textArea($model,'growerServices',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'growerServices'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'stockSeed'); ?>
                                <?php echo $form->textArea($model,'stockSeed',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'stockSeed'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'productionReports'); ?>
                                <?php echo $form->textArea($model,'productionReports',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'productionReports'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'shipments'); ?>
                                <?php echo $form->textArea($model,'shipments',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'shipments'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'aditionalPhitosanitaryReq'); ?>
                                <?php echo $form->textArea($model,'aditionalPhitosanitaryReq',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'aditionalPhitosanitaryReq'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'preShipmentsSeedSamples'); ?>
                                <?php echo $form->textArea($model,'preShipmentsSeedSamples',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'preShipmentsSeedSamples'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'earlyTerminationBuyOut'); ?>
                                <?php echo $form->textArea($model,'earlyTerminationBuyOut',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'earlyTerminationBuyOut'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'overProduction'); ?>
                                <?php echo $form->textArea($model,'overProduction',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'overProduction'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'prices'); ?>
                                <?php echo $form->textArea($model,'prices',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'prices'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'advancePayments'); ?>
                                <?php echo $form->textArea($model,'advancePayments',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'advancePayments'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'paymentTerms'); ?>
                                <?php echo $form->textArea($model,'paymentTerms',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'paymentTerms'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'confidentiality'); ?>
                                <?php echo $form->textArea($model,'confidentiality',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'confidentiality'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'lotNumberAssignment'); ?>
                                <?php echo $form->textArea($model,'lotNumberAssignment',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'lotNumberAssignment'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'arbitrationAndLaw'); ?>
                                <?php echo $form->textArea($model,'arbitrationAndLaw',array('class' => 'form-control','placeholder' => '','rows'=>6,'cols'=>50)); ?>
                		<?php echo $form->error($model,'arbitrationAndLaw'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'buyerSigName'); ?>
                                <?php echo $form->textField($model,'buyerSigName',array('size'=>50,'maxlength'=>50),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'buyerSigName'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'growerSigName'); ?>
                                <?php echo $form->textField($model,'growerSigName',array('size'=>50,'maxlength'=>50),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'growerSigName'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'status'); ?>
                                <?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'status'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'used_by'); ?>
                                <?php echo $form->textField($model,'used_by',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'used_by'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'check_in'); ?>
                                <?php echo $form->textField($model,'check_in',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'check_in'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'created_by'); ?>
                                <?php echo $form->textField($model,'created_by',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'created_by'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'created'); ?>
                                <?php echo $form->textField($model,'created',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'created'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'modified_by'); ?>
                                <?php echo $form->textField($model,'modified_by',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'modified_by'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'modified'); ?>
                                <?php echo $form->textField($model,'modified',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'modified'); ?>
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