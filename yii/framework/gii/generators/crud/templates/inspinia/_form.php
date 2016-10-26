<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => '<?php echo $this->class2id($this->modelClass) ?>-form',
    'enableAjaxValidation' => <?php echo $this->validation == 1 || $this->validation == 3 ? 'true' : 'false' ?>,
    'enableClientValidation'=> <?php echo $this->validation == 2 || $this->validation == 3 ? 'true' : 'false' ?>,
    )); ?>

<div class="form">


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>

        

<div class="form">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $this->modelClass; ?> <small>[<?php echo "<?php echo \$model->isNewRecord ? 'New' : 'Edit'; ?>\n"; ?>]</small></h5>
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
                                <?php echo "<?php echo \$form->error(\$model, 'nombre'); ?>\n"; ?>
                            </div>                            
<?php
foreach($this->tableSchema->columns as $column)
{
    if ($column->autoIncrement || in_array($column->name, array_merge($this->create_time, $this->update_time)))
    {
        continue;
    }
?>                          <div>
                                <?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column, array('class' => 'form-control', 'placeholder' => ''))."; ?>\n"; ?>
                		<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
                            </div>

<?php
}
?>
                            <div class="buttons">
                                <?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Crear' : 'Guardar',array(\"class\"=>\"btn btn-primary btn-large pull-right m-t-n-xs\")); ?>\n"; ?>
                            </div>                    
                        </div>
                        <div class="col-sm-6">
                            <h4>Mensajes del sistema</h4>
                            <?php echo "<?php echo \$form->errorSummary(\$model); ?>"; ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->