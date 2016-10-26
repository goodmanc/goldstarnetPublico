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
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Create',
);\n";
?>

$this->menu=array(
	array('label'=>'Listar <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('label'=>'Administrar <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);

?>

<h1><?php  echo $this->modelClass; ?><span>[<?php echo "<?php echo \$model->isNewRecord ? 'Crear' : 'Guardar'; ?>"; ?>]</span></h1>

<?php echo "<?php \n\t\$view = '_form';\n\t\$view .= ((\$viewFile=\$this->getViewFile(\$view.'_custom'))!==false) ? '_custom' : '';\n\t\$this->renderPartial(\$view, array('model'=>\$model));\n ?>"; ?>
