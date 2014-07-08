<?php
/* @var $this VotingHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Voting Histories',
);

$this->menu=array(
	array('label'=>'Create VotingHistory', 'url'=>array('create')),
	array('label'=>'Manage VotingHistory', 'url'=>array('admin')),
);
?>

<h1>Voting Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
