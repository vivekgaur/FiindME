<?php

/**
 * This is the model class for table "tbl_deal".
 *
 * The followings are the available columns in table 'tbl_deal':
 * @property integer $deal_id
 * @property integer $merchant_id_fk
 * @property string $title
 * @property string $description
 * @property string $create_time
 * @property string $last_update
 * @property string $start_time
 * @property string $end_time
 * @property integer $quantity
 * @property string $status
 * @property integer $discount
 * @property integer $user_analytics_id_fk
 *
 * The followings are the available model relations:
 * @property Merchant $merchantIdFk
 * @property UserAnalytic $userAnalyticsIdFk
 * @property User[] $users
 * @property UserAnalytic[] $userAnalytics
 */
class Deal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Deal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_deal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('merchant_id_fk, title, description, create_time, last_update, start_time, end_time, quantity, status, discount, user_analytics_id_fk', 'required'),
			array('merchant_id_fk, quantity, discount, user_analytics_id_fk', 'numerical', 'integerOnly'=>true),
			array('title, status', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('deal_id, merchant_id_fk, title, description, create_time, last_update, start_time, end_time, quantity, status, discount, user_analytics_id_fk', 'safe', 'on'=>'search'),
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
			'merchantIdFk' => array(self::BELONGS_TO, 'Merchant', 'merchant_id_fk'),
			'userAnalyticsIdFk' => array(self::BELONGS_TO, 'UserAnalytic', 'user_analytics_id_fk'),
			'users' => array(self::HAS_MANY, 'User', 'deals_id_fk'),
			'userAnalytics' => array(self::HAS_MANY, 'UserAnalytic', 'deal_id_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'deal_id' => 'Deal',
			'merchant_id_fk' => 'Merchant',
			'title' => 'Title',
			'description' => 'Description',
			'create_time' => 'Create Time',
			'last_update' => 'Last Update',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'quantity' => 'Quantity',
			'status' => 'Status',
			'discount' => 'Discount',
			'user_analytics_id_fk' => 'User Analytics',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('deal_id',$this->deal_id);
		$criteria->compare('merchant_id_fk',$this->merchant_id_fk);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('user_analytics_id_fk',$this->user_analytics_id_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}