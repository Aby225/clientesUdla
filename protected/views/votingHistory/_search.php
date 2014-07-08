<?php
/* @var $this VotingHistoryController */
/* @var $model VotingHistory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pollId'); ?>
		<?php echo $form->textField($model,'pollId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'questionId'); ?>
		<?php echo $form->textField($model,'questionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'optionId'); ?>
		<?php echo $form->textField($model,'optionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->