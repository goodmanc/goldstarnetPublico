<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
	<div class="row-fluid">
		<div class="span12">
                    <?php
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
                    ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $content; ?>		
		</div>
	</div>
<?php $this->endContent(); ?>