<?php
/* @var $this PollController */
/* @var $data Poll */
?>

<div class="view">

	<!--<?php $us = User::model()->findAll('id='. $data->userId); ?>-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visits')); ?>:</b>
	<?php echo CHtml::encode($data->visits); ?>
	<br />
<br />

</div>