<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	'Questions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Add Option', 'url'=>array('optionQ/create','qId'=>$model->id, 'pId'=>Yii::app()->getRequest()->getQuery('pId'))),
	array('label'=>'List Question', 'url'=>array('index')),
	array('label'=>'Create Question', 'url'=>array('create')),
	array('label'=>'Update Question', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Question', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Question', 'url'=>array('admin')),
);
?>

<h1><!--View Question #<?php echo $model->id; ?>--></h1>

<?php $data = OptionQ::model()->findAll('questionId='. $model->id
	//array('id'=>$_POST['id'])
      );?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'header',
		//'type',
		array(
                'label'=>'Opciones',
                'type'=>'html',
                'value'=> function($data) {
                	if($data->type=='closed'){
                    $options = array();
                    foreach ($data->optionQs as $op) {
                        $options[] .= $op->optionText;
                    }
                    return implode(', ', $options);}
                    return '';
                }
            ),
		//'pollId',
	),
)); ?>
