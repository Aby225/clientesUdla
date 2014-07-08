<?php
/* @var $this OptionQController */
/* @var $model OptionQ */

$this->breadcrumbs=array(
	'Option Qs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionQ', 'url'=>array('index')),
	array('label'=>'Manage OptionQ', 'url'=>array('admin')),
);
?>

<h1>Create OptionQ</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>