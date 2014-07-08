<?php 
/* @var $this PollController */
/* @var $model Poll */

//RESULTADOSSSS

?>

<h1>Resultados de "<?php echo $model->name; ?>"</h1>

<?php //$data1 = VotingHistory::model()->findAll('pollId='. $model->id);
$criteria = new CDbCriteria();
/*$criteria=array(
           
            'select'=>'questionId, optionId, count(userId) AS cc',
             'group'=>'questionId, optionId',
            'condition' => 'pollId ='.$model->id,
);*/

$criteria->select = 'questionId, optionId, count(userId) AS cc, userId';
$criteria->condition = 'pollId ='.$model->id;
$criteria->group = 'questionId, optionId';
$vote = Yii::app()->db->createCommand('Select * from voting_history where pollId='.$model->id.';');
$vote1 = Yii::app()->db->createCommand('Select id,questionId, optionId, COUNT(userId) AS cc from voting_history where pollId ='.$model->id.' group by questionId, optionId;');
//$vote2 = Yii::app()->db->createCommand('Select id,pollId from voting_history where pollId =1');
    /*->select('questionId, optionId, userId')
    ->from('voting_history')
    ->where('pollId='.$model->id)
    //->group()
    ->queryAll();*/
//$criteria->group = '';
$data = VotingHistory::model()->findAll($criteria);
//echo $data2[0]->;
	
  $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => new CArrayDataProvider($data),//new CSqlDataProvider($vote1),
       
        'columns' => array(
            //'questionId',
            'cc',
           array(
                'name'  => 'Pregunta',
                'value' => '$data->question->header',
                'type'  => 'raw',
            ),
            array(
                'name'  => 'Respuesta',
                'value' => '$data->option->optionText',
                'type'  => 'raw',
            ),
             array(
                'name'  => 'Usuario',
                'value' => '$data->user->username',
                'type'  => 'raw',
            ),
        	/*array(
                'header'=>'Opciones',
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
            ),*/
        	//'type'
         //specify the colums you wanted here
        ),
    ));


 ?>

