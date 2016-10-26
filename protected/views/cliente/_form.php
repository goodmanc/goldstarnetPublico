<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'cliente-form',
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
                    <h5>Cliente <small>[<?php echo $model->isNewRecord ? 'New' : 'Edit'; ?>
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
                                <?php echo $form->textFieldRow($model, 'rut', array('class' => 'span5', 'maxlength' => 10)); ?>
                		<?php echo $form->error($model,'rut'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'nombre', array('class' => 'span5', 'maxlength' => 100)); ?>
                		<?php echo $form->error($model,'nombre'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'nombreCorto', array('class' => 'span5', 'maxlength' => 20)); ?>
                		<?php echo $form->error($model,'nombreCorto'); ?>
                            </div>

                          <div>
                                <?php echo $form->textFieldRow($model, 'abrev', array('class' => 'span5', 'maxlength' => 20)); ?>
                		<?php echo $form->error($model,'abrev'); ?>
                            </div>

                          <div>
                                <?php echo $form->dropDownListRow($model, 'pais_id', CHtml::listData(Pais::model()->findAll(), 'id', Pais::representingColumn())); ?>
                		<?php echo $form->error($model,'pais_id'); ?>
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