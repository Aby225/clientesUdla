<?php
/* @var $this QuestionController */
/* @var $data Question */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('header')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->header), array('view', 'id'=>$data->id , 'pId'=>$data->pollId)); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('header')); ?>:</b>
	<?php echo CHtml::encode($data->header); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />-->

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('pollId')); ?>:</b>
	<?php echo CHtml::encode($data->pollId); ?>-->
	<br />


</div>