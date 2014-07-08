<?php 
/* @var $this PollController */
/* @var $model Poll */

//RESULTADOSSSS

?>

<h1>Reporte Diario</h1>

<?php //$data1 = VotingHistory::model()->findAll('pollId='. $model->id);
$criteria = new CDbCriteria();
/*$criteria=array(
           
            'select'=>'questionId, optionId, count(userId) AS cc',
             'group'=>'questionId, optionId',
            'condition' => 'pollId ='.$model->id,
);*/

//$vote = Yii::app()->db->createCommand('Select * from voting_history where pollId='.$model->id.';');
$vote1 = Yii::app()->db->createCommand('select id, Encuesta, Fecha, count(o.users) as Usuarios from (
select v.id as id,p.name as Encuesta, u.id as users, v.created as Fecha FROM voting_history as v inner join poll as p on p.id=v.pollId inner join user as u on u.id = v.userId WHERE v.created >= curdate() group by v.pollId, u.id order by v.created DESC) as o');
//$vote2 = Yii::app()->db->createCommand('Select id,pollId from voting_history where pollId =1');
    /*->select('questionId, optionId, userId')
    ->from('voting_history')
    ->where('pollId='.$model->id)
    //->group()
    ->queryAll();*/
//$criteria->group = '';
//$data = VotingHistory::model()->findAll($criteria);
//echo $data2[0]->;
	
  $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => new CSqlDataProvider($vote1),
       
        
    ));


 ?>

