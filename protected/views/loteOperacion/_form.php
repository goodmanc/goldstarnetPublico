<?php
/* @var $this LoteOperacionController */
/* @var $model LoteOperacion */
/* @var $form CActiveForm */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'lote-operacion-form',
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
                                <?php echo $form->textFieldRow($model, 'id', array('class' => 'span5', 'maxlength' => 2)); ?>
                		<?php echo $form->error($model,'id'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'nombre', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'nombre'); ?>
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