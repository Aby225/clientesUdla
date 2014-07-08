<?php
/* @var $this OptionQController */
/* @var $model OptionQ */

$this->breadcrumbs=array(
	'Option Qs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionQ', 'url'=>array('index')),
	array('label'=>'Create OptionQ', 'url'=>array('create')),
	array('label'=>'View OptionQ', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OptionQ', 'url'=>array('admin')),
);
?>

<h1>Update OptionQ <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>