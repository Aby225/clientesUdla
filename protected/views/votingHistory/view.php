<?php
/* @var $this VotingHistoryController */
/* @var $model VotingHistory */

$this->breadcrumbs=array(
	'Voting Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VotingHistory', 'url'=>array('index')),
	array('label'=>'Create VotingHistory', 'url'=>array('create')),
	array('label'=>'Update VotingHistory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VotingHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VotingHistory', 'url'=>array('admin')),
);
?>

<h1>View VotingHistory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pollId',
		'questionId',
		'optionId',
		'userId',
		'created',
	),
)); ?>
