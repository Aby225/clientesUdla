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


	<?php echo $form->errorSummary($model1, $poll, $question); ?>

		<!--foreach($question as $i=>$q):
	//$rowCounter = 0; foreach($question as $q):
	//foreach($cosas as $h=>$c):
	//foreach($question as $i=>$q):-->
			
		<div class="row">
			<?php echo $form->labelEx($question, $question->header, array('style' => 'font-weight: bold;' ));
			
			?>
	
			<?php $type_list=CHtml::listData(Question::model()->findAll(),'id','header');
			//echo CHtml::activeRadioButtonList($model1,'id',$type_list);


			//$option= OptionQ::model()->findAllByAttributes(array('questionId'=>$question->id));
			$option = CHtml::listData(OptionQ::model()->findAllByAttributes(array('questionId'=>$question->id)),'id','optionText');
			if($question->type == 'closed'){
			
				//foreach($option as $op):?>
				
			<div class="radio">
			<?php echo CHtml::activeRadioButtonList($model1,'id',$option,array('separator' => '', 'template' => '{input} {label}' )); ?>

			</div>
		
				<?php //endforeach; ?>
				<?php echo $form->error($model1, 'id'); ?>
			<?php } else {

			}?>

			<?php echo $form->textField($model1,'optionId',array('style' => ($question->type == 'open')? 'display: block;' : 'display: none;' )); ?>
			
			
		<br>


		<?php echo $form->error($question,''); 
		//echo 'en form'. Yii::app()->session['i'];
		//Yii::app()->session['i'] = Yii::app()->session['i'] + 1;
		?>


		

		
		
			
		
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Siguiente Pregunta'); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->