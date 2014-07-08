<?php
/* @var $this VotingHistoryController */
/* @var $model VotingHistory */

$this->breadcrumbs=array(
	'Voting Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VotingHistory', 'url'=>array('index')),
	array('label'=>'Create VotingHistory', 'url'=>array('create')),
	array('label'=>'View VotingHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VotingHistory', 'url'=>array('admin')),
);
?>

<h1>Update VotingHistory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form 2', array('model'=>$model)); ?>