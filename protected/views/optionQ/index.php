<?php
/* @var $this OptionQController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Option Qs',
);

$this->menu=array(
	array('label'=>'Create OptionQ', 'url'=>array('create')),
	array('label'=>'Manage OptionQ', 'url'=>array('admin')),
);
?>

<h1>Option Qs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
