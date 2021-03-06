<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
			$this->widget('application.components.MyMenu', array(
                           'activateItemsOuter'=>false,
                            'linkLabelWrapper' => 'span',
                            'activateItems' => true,
                            'activateParents' => true,
                            'itemTemplate' => '{menu}',
                            'id' => 'side-menu',
                            'items'=>$this->menu,
                            'htmlOptions'=>array('class'=>'nav nav-tabs'),
			));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>
