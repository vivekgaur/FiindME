<?php

/**
 * This is the model class for table "tbl_user_analytic".
 *
 * The followings are the available columns in table 'tbl_user_analytic':
 * @property integer $id
 * @property integer $deal_id_fk
 * @property integer $user_clicked
 * @property integer $user_interested
 * @property integer $user_shared
 * @property integer $user_looking
 * @property integer $user_in_zipcode
 *
 * The followings are the available model relations:
 * @property Deal[] $deals
 * @property Merchant[] $merchants
 * @property Deal $dealIdFk
 */
class UserAnalytic extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserAnalytic the static model class
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
		return 'tbl_user_analytic';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('deal_id_fk, user_clicked, user_interested, user_shared, user_looking, user_in_zipcode', 'required'),
			array('deal_id_fk, user_clicked, user_interested, user_shared, user_looking, user_in_zipcode', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, deal_id_fk, user_clicked, user_interested, user_shared, user_looking, user_in_zipcode', 'safe', 'on'=>'search'),
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
			'deals' => array(self::HAS_MANY, 'Deal', 'user_analytics_id_fk'),
			'merchants' => array(self::HAS_MANY, 'Merchant', 'user_analytics_id_fk'),
			'dealIdFk' => array(self::BELONGS_TO, 'Deal', 'deal_id_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'deal_id_fk' => 'Deal Id Fk',
			'user_clicked' => 'User Clicked',
			'user_interested' => 'User Interested',
			'user_shared' => 'User Shared',
			'user_looking' => 'User Looking',
			'user_in_zipcode' => 'User In Zipcode',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('deal_id_fk',$this->deal_id_fk);
		$criteria->compare('user_clicked',$this->user_clicked);
		$criteria->compare('user_interested',$this->user_interested);
		$criteria->compare('user_shared',$this->user_shared);
		$criteria->compare('user_looking',$this->user_looking);
		$criteria->compare('user_in_zipcode',$this->user_in_zipcode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}