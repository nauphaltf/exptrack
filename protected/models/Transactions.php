<?php

/**
 * This is the model class for table "transactions".
 *
 * The followings are the available columns in table 'transactions':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $transaction_date
 * @property string $entry_time
 * @property string $transaction_type
 * @property string $amount
 * @property string $reciept_no
 * @property integer $status
 */
class Transactions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transactions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, description, transaction_date, entry_time, transaction_type, amount, reciept_no, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('title, reciept_no', 'length', 'max'=>145),
			array('transaction_type', 'length', 'max'=>1),
			array('amount', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, transaction_date, entry_time, transaction_type, amount, reciept_no, status', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'description' => 'Description',
			'transaction_date' => 'Transaction Date',
			'entry_time' => 'Entry Time',
			'transaction_type' => 'Transaction Type',
			'amount' => 'Amount',
			'reciept_no' => 'Reciept No',
			'status' => 'Status',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('transaction_date',$this->transaction_date,true);
		$criteria->compare('entry_time',$this->entry_time,true);
		$criteria->compare('transaction_type',$this->transaction_type,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('reciept_no',$this->reciept_no,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transactions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
