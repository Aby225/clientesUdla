<?php
/* @var $this PollController */
/* @var $model Poll */

$this->breadcrumbs=array(
	'Polls'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Poll', 'url'=>array('index')),
	array('label'=>'Create Poll', 'url'=>array('create')),
	array('label'=>'Update Poll', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Poll', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Poll', 'url'=>array('admin')),
);

?>

<h1><!--View Poll #--><?php echo $model->name; ?></h1>

<?php $data = Question::model()->findAll('pollId='. $model->id
	//array('id'=>$_POST['id'])
      );
	
  $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => new CArrayDataProvider($data),
        'columns' => array(
        	//'header',
            array(
                'name'  => 'Pregunta',
                'value' => 'CHtml::link($data->header, Yii::app()
                ->createUrl("question/view",array("id"=>$data->primaryKey, "pId"=>$data->pollId)))',
                'type'  => 'raw',
            ),

        	array(
                'header'=>'ttttt',
                'type'=>'html',
                'value'=> function($data) {
                    $options = array();
                    foreach ($data->optionQs as $op) {
                        $options[] .= $op->optionText;
                    }
                    return implode(', ', $options);
                }
            ),
        	
         //specify the colums you wanted here
        ),
    ));


 ?>

 
<!--<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
		//'userId',
		//'visits',
	),
)); ?>-->
