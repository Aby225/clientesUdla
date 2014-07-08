<?php

/**
 * This is the model class for table "voting_history".
 *
 * The followings are the available columns in table 'voting_history':
 * @property integer $id
 * @property integer $pollId
 * @property integer $questionId
 * @property integer $optionId
 * @property integer $userId
 * @property string $created
 *
 * The followings are the available model relations:
 * @property Poll $poll
 * @property Question $question
 * @property OptionQ $option
 * @property User $user
 */
class VotingHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'voting_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('created', 'required'),
			array('pollId, questionId, optionId, userId', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pollId, questionId, optionId, userId, created', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'poll' => array(self::BELONGS_TO, 'Poll', 'pollId'),
			'question' => array(self::BELONGS_TO, 'Question', 'questionId'),
			'option' => array(self::BELONGS_TO, 'OptionQ', 'optionId'),
			'user' => array(self::BELONGS_TO, 'User', 'userId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pollId' => 'Poll',
			'questionId' => 'Question',
			'optionId' => 'Option',
			'userId' => 'User',
			'created' => 'Created',
		);
	}


	public function beforeSave(){

		/*$this->pollId = 1;
			foreach($question as $q):

				$this->questionId = 1;
				$this->optionId = 1;
				$this->userId = 1;
				$this->attributes=$_POST['VotingHistory'];

			endforeach;*/
			
    	//$this->userId = 14;//Yii::app()->user->getId();
    	return parent::beforeSave();
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('pollId',$this->pollId);
		$criteria->compare('questionId',$this->questionId);
		$criteria->compare('optionId',$this->optionId);
		$criteria->compare('userId',$this->userId);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VotingHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}