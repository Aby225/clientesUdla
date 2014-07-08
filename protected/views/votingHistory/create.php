<?php
/* @var $this VotingHistoryController */
/* @var $model VotingHistory */

//$this->breadcrumbs=array(
//	'Voting Histories'=>array('index'),
//	'Create',
/*);

$this->menu=array(
	array('label'=>'List VotingHistory', 'url'=>array('index')),
	array('label'=>'Manage VotingHistory', 'url'=>array('admin')),
);*/
?>

<h1>
<?php echo $poll->name; ?> </h1>

<?php $this->renderPartial('_form', array('model1'=>$model1,'poll'=>$poll,'question'=>$question)); ?>