<?php

class VotingHistoryController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	public $i=0;
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	
	public function actionCreate()
	{
		$model1=new VotingHistory();
		$pId = Yii::app()->getRequest()->getQuery('pId');
		$poll= Poll::model()->findByPk($pId);
		$question= Question::model()->findAllByAttributes(array('pollId'=>$poll->id));
		$uId = Yii::app()->getRequest()->getQuery('uId');

		if(isset($_POST['VotingHistory']))
		{
			//for($i=0;$i<=count($question);$i++){
			//	var_dump($i);
			//	var_dump(count($question));
			//}
			//$i++;
			$model1->questionId = $question[Yii::app()->session['i']]->id;
			echo $uId;
			
				$model1->pollId = $pId;
				if($question[Yii::app()->session['i']]->type == 'closed'){
					$model1->optionId = $_POST['VotingHistory']['id'];
				}else{
					$myOp = new OptionQ();
					$myOp->optionText = $_POST['VotingHistory']['optionId'];
					//echo 'id q '.$question[Yii::app()->session['i']]->id;
					$myOp->setAttribute('questionId',$question[Yii::app()->session['i']]->id);
					if($myOp->save()){
						//echo ' myOp '.$myOp->getPrimaryKey();
						//echo ' que '.$myOp->questionId;
					}
					//echo 'myOp '.$myOp->id;
					//$model1->optionId=$myOp->id;
					$model1->optionId = $myOp->getPrimaryKey();
				}
				$model1->userId = $uId;

				if($model1->save()){
					//echo 'creaaar ';
				}

			Yii::app()->session['i'] = Yii::app()->session['i'] + 1;
			//echo 'inicio'.Yii::app()->session['i'];
			if(Yii::app()->session['i']<=count($question)-1){
				$model1=new VotingHistory();
				$this->render('create',array(
			'model1'=>$model1, 'poll'=>$poll,'question'=>$question[Yii::app()->session['i']]));
				//$this->redirect(array('view','id'=>$model1->id));
				
			} else {	
				echo '<script>
        		alert("GRACIAS! \nTus respuestas han sido almacenadas correctamente!\n\n");
        		location.replace("/yii/clienteUDLA/index.php?r=site/index");
      			 </script>'; 
				//$this->redirect(array('view'));

			}
			
		} else {
			Yii::app()->session['i']=0;
		}
		
			//unset(Yii::app()->session['i']);
			
		$this->render('create',array(
			'model1'=>$model1, 'poll'=>$poll,'question'=>$question[0],
		));
		

		
		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['VotingHistory']))
		{
			$model->attributes=$_POST['VotingHistory'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('VotingHistory');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new VotingHistory('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['VotingHistory']))
			$model->attributes=$_GET['VotingHistory'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return VotingHistory the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=VotingHistory::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param VotingHistory $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='voting-history-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
