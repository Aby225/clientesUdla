<?php
/* @var $this OptionQController */
/* @var $model OptionQ */

$this->breadcrumbs=array(
	'Option Qs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OptionQ', 'url'=>array('index')),
	array('label'=>'Create OptionQ', 'url'=>array('create')),
	array('label'=>'Update OptionQ', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OptionQ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionQ', 'url'=>array('admin')),
);
?>

<h1>View OptionQ #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'optionText',
		'questionId',
	),
)); ?>
