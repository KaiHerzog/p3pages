<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords')); ?>:</b>
	<?php echo CHtml::encode($data->keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moduleId')); ?>:</b>
	<?php echo CHtml::encode($data->moduleId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('controllerId')); ?>:</b>
	<?php echo CHtml::encode($data->controllerId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actionName')); ?>:</b>
	<?php echo CHtml::encode($data->actionName); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('requestParam')); ?>:</b>
	<?php echo CHtml::encode($data->requestParam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('layout')); ?>:</b>
	<?php echo CHtml::encode($data->layout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view')); ?>:</b>
	<?php echo CHtml::encode($data->view); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	*/ ?>

</div>
