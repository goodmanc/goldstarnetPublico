<?php
/* @var $this MonedaController */
/* @var $model Moneda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'moneda-form',
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
                                <?php echo $form->labelEx($model,'id'); ?>
                                <?php echo $form->textField($model,'id',array('size'=>4,'maxlength'=>4),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'id'); ?>
                            </div>

                          <div>
                                <?php echo $form->labelEx($model,'nombre'); ?>
                                <?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50),array('class' => 'form-control','placeholder' => '')); ?>
                		<?php echo $form->error($model,'nombre'); ?>
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