<?php
/* @var $this ClienteContactoController */
/* @var $model ClienteContacto */
/* @var $form CActiveForm */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'cliente-contacto-form',
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
                    <h5>ClienteContacto <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
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
                                <?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>
                		<?php echo $form->error($model,'id'); ?>
                            </div>

                          <div>
                                <?php echo $form->dropDownListRow($model, 'cliente_id', CHtml::listData(Cliente::model()->findAll(), 'id', Cliente::representingColumn())); ?>
                		<?php echo $form->error($model,'cliente_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'primerNombre', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'primerNombre'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'segundoNombre', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'segundoNombre'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'apellidos', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'apellidos'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'titulo', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'titulo'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'posision', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'posision'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'direccion', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'direccion'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'tel1', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'tel1'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'tel2', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'tel2'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'movil', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'movil'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'fax', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'fax'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'notas1', array('class' => 'span5', 'maxlength' => 100)); ?>
                		<?php echo $form->error($model,'notas1'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'notas2', array('class' => 'span5', 'maxlength' => 100)); ?>
                		<?php echo $form->error($model,'notas2'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 50)); ?>
                		<?php echo $form->error($model,'email'); ?>
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