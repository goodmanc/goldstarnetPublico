<?php
/* @var $this AgricultorController */
/* @var $model Agricultor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agricultor-form',
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
                                <?php echo $form->labelEx($model,'rut'); ?>
                                <?php echo $form->textField($model,'rut',array('size'=>10,'maxlength'=>10),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'rut'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'razonSocial'); ?>
                                <?php echo $form->textField($model,'razonSocial',array('size'=>60,'maxlength'=>100),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'razonSocial'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'direccion'); ?>
                                <?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'direccion'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'email'); ?>
                                <?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'email'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'telefono'); ?>
                                <?php echo $form->textField($model,'telefono',array('size'=>50,'maxlength'=>50),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'telefono'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad1'); ?>
                                <?php echo $form->textField($model,'propiedad1',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad1'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad2'); ?>
                                <?php echo $form->textField($model,'propiedad2',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad2'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad3'); ?>
                                <?php echo $form->textField($model,'propiedad3',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad3'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad4'); ?>
                                <?php echo $form->textField($model,'propiedad4',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad4'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad5'); ?>
                                <?php echo $form->textField($model,'propiedad5',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad5'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad6'); ?>
                                <?php echo $form->textField($model,'propiedad6',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad6'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad7'); ?>
                                <?php echo $form->textField($model,'propiedad7',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad7'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad8'); ?>
                                <?php echo $form->textField($model,'propiedad8',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad8'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad9'); ?>
                                <?php echo $form->textField($model,'propiedad9',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad9'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad10'); ?>
                                <?php echo $form->textField($model,'propiedad10',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad10'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad11'); ?>
                                <?php echo $form->textField($model,'propiedad11',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad11'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad12'); ?>
                                <?php echo $form->textField($model,'propiedad12',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad12'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad13'); ?>
                                <?php echo $form->textField($model,'propiedad13',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad13'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad14'); ?>
                                <?php echo $form->textField($model,'propiedad14',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad14'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad15'); ?>
                                <?php echo $form->textField($model,'propiedad15',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad15'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'propiedad16'); ?>
                                <?php echo $form->textField($model,'propiedad16',array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'propiedad16'); ?>
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