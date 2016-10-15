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
?>

<div class="form">



	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo "<?php echo \$form->errorSummary(\$model); ?>\n"; ?>

<?php
   foreach ($this->tableSchema->columns as $column): ?>
        <?php
        if ($column->autoIncrement || in_array($column->name, array_merge($this->create_time, $this->update_time))) {
            continue;
        }
        //skip many to many relations, they are rendered below, this allows handling of nm relationships
        foreach ($this->getRelations() as $relation) {
            if ($relation[2] == $column->name && $relation[0] == 'CManyManyRelation') {
                continue 2;
            }
        }
        ?>
	<div>
		<?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo \$form->error(\$model,'{$column->name}'); ?>\n"; ?>
	</div>
        
        <?php endforeach; ?>

	<div class="buttons">
		<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Create' : 'Save',array(\"class\"=>\"btn btn-primary btn-large\")); ?>\n"; ?>
	</div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->