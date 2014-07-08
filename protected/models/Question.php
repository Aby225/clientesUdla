<?php

/**
 * This is the model class for table "question".
 *
 * The followings are the available columns in table 'question':
 * @property integer $id
 * @property string $header
 * @property string $type
 * @property integer $pollId
 *
 * The followings are the available model relations:
 * @property OptionQ[] $optionQs
 * @property Poll $poll
 * @property VotingHistory[] $votingHistories
 */
class Question extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'question';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('header', 'required'),
			array('pollId', 'numerical', 'integerOnly'=>true),
			array('header', 'length', 'max'=>255),
			array('type', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, header, type, pollId', 'safe', 'on'=>'search'),
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
			'optionQs' => array(self::HAS_MANY, 'OptionQ', 'questionId'),
			'poll' => array(self::BELONGS_TO, 'Poll', 'pollId'),
			'votingHistories' => array(self::HAS_MANY, 'VotingHistory', 'questionId'),
		);
	}

	public function beforeSave(){
		if(Yii::app()->getRequest()->getQuery('pId') !== null){
			$this->pollId = Yii::app()->getRequest()->getQuery('pId'); 
    		$this->type = 'closed';
		}
    	
    	return parent::beforeSave();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'header' => 'Header',
			'type' => 'Type',
			'pollId' => 'Poll',
		);
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
		$criteria->compare('header',$this->header,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('pollId',$this->pollId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Question the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
