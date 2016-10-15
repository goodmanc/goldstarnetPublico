<?php
/* @var $this CondicionesController */
/* @var $model Condiciones */
/* @var $form CActiveForm */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'condiciones-form',
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
                                <?php echo $form->dropDownListRow($model, 'oventa_id', CHtml::listData(Contratocliente::model()->findAll(), 'id', Contratocliente::representingColumn())); ?>
                		<?php echo $form->error($model,'oventa_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->dropDownListRow($model, 'condicion_id', CHtml::listData(Condicion::model()->findAll(), 'id', Condicion::representingColumn())); ?>
                		<?php echo $form->error($model,'condicion_id'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'valor', array('class' => 'span5')); ?>
                		<?php echo $form->error($model,'valor'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'prefix_copy1', array('class' => 'span5', 'maxlength' => 20)); ?>
                		<?php echo $form->error($model,'prefix_copy1'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'sufix', array('class' => 'span5', 'maxlength' => 20)); ?>
                		<?php echo $form->error($model,'sufix'); ?>
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