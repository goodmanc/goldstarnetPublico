<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'Update',
);\n";
?>

$this->menu=array(
	array('label'=>'Listar <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('label'=>'Crear <?php echo $this->modelClass; ?>', 'url'=>array('create')),
	array('label'=>'Actualizar <?php echo $this->modelClass; ?>', 'url'=>array('update', 'id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'Borrar <?php echo $this->modelClass; ?>', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>


<h1>Ver <?php echo $this->modelClass." #<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>

<?php echo "<?php \n\t\$view = '_view';\n\t\$view .= ((\$viewFile=\$this->getViewFile(\$view.'_custom'))!==false) ? '_custom' : '';\n\t\$this->renderPartial(\$view, array('model'=>\$model));\n ?>"; ?>
