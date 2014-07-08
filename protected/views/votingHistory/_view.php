<?php
/* @var $this VotingHistoryController */
/* @var $data VotingHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pollId')); ?>:</b>
	<?php echo CHtml::encode($data->pollId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questionId')); ?>:</b>
	<?php echo CHtml::encode($data->questionId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('optionId')); ?>:</b>
	<?php echo CHtml::encode($data->optionId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />


</div>