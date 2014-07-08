<?php
/* @var $this VotingHistoryController */
/* @var $model VotingHistory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'voting-history-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pollId'); ?>
		<?php echo $form->textField($model,'pollId'); ?>
		<?php echo $form->error($model,'pollId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'questionId'); ?>
		<?php echo $form->textField($model,'questionId'); ?>
		<?php echo $form->error($model,'questionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'optionId'); ?>
		<?php echo $form->textField($model,'optionId'); ?>
		<?php echo $form->error($model,'optionId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userId'); ?>
		<?php echo $form->textField($model,'userId'); ?>
		<?php echo $form->error($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->