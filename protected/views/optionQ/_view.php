<?php
/* @var $this OptionQController */
/* @var $data OptionQ */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('optionText')); ?>:</b>
	<?php echo CHtml::encode($data->optionText); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questionId')); ?>:</b>
	<?php echo CHtml::encode($data->questionId); ?>
	<br />


</div>