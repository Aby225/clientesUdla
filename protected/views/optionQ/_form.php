<?php
/* @var $this OptionQController */
/* @var $model OptionQ */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'option-q-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'optionText'); ?>
		<?php echo $form->textField($model,'optionText',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'optionText'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'questionId'); ?>
		<?php echo $form->textField($model,'questionId'); ?>	//Era id de pregunta
		<?php echo $form->error($model,'questionId'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->