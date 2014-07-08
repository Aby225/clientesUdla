<?php
/* @var $this PollController */
/* @var $model Poll */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'poll-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<!--<div class="row">
		<!--<?php echo $form->labelEx($model,'userId'); ?>
		<?php echo $form->hiddenField($model,'userId',array('value' =>'3')); ?>	//Era userId
		<?php echo $form->error($model,'userId'); ?>
	</div>-->

	<!--<div class="row">
		<?php echo $form->labelEx($model,'visits'); ?>
		<?php echo $form->textField($model,'visits'); ?>		//Era visitas
		<?php echo $form->error($model,'visits'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->