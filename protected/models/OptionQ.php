<?php

/**
 * This is the model class for table "optionQ".
 *
 * The followings are the available columns in table 'optionQ':
 * @property integer $id
 * @property string $optionText
 * @property integer $questionId
 *
 * The followings are the available model relations:
 * @property Question $question
 * @property VotingHistory[] $votingHistories
 */
class OptionQ extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'optionQ';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('questionId', 'numerical', 'integerOnly'=>true),
			array('optionText', 'required'),
			array('optionText', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, optionText, questionId', 'safe', 'on'=>'search'),
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
			'question' => array(self::BELONGS_TO, 'Question', 'questionId'),
			'votingHistories' => array(self::HAS_MANY, 'VotingHistory', 'optionId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'optionText' => 'Texto',
			'questionId' => 'Question',
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
		$criteria->compare('optionText',$this->optionText,true);
		$criteria->compare('questionId',$this->questionId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave(){
		if((Yii::app()->getRequest()->getQuery('qId'))!==null){
			$this->questionId = Yii::app()->getRequest()->getQuery('qId'); //Guardar el id de question de url
    		$question = Question::model()->findByPk(Yii::app()->getRequest()->getQuery('qId'));
    		$question->type = 'closed';
		}
    	return parent::beforeSave();
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OptionQ the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
