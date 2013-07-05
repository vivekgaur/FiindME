<?php

/**
 * This is the model class for table "tbl_contact".
 *
 * The followings are the available columns in table 'tbl_contact':
 * @property integer $contact_id
 * @property string $first_name
 * @property string $last_name
 * @property string $middle_name
 * @property integer $address_id_fk
 * @property integer $contact_phone_id_fk
 * @property integer $cell_phone_id_fk
 *
 * The followings are the available model relations:
 * @property Address $addressIdFk
 * @property Phone $contactPhoneIdFk
 * @property Phone $cellPhoneIdFk
 * @property Merchant[] $merchants
 * @property User[] $users
 */
class Contact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contact the static model class
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
		return 'tbl_contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, address_id_fk, contact_phone_id_fk, cell_phone_id_fk', 'required'),
			array('address_id_fk, contact_phone_id_fk, cell_phone_id_fk', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name', 'length', 'max'=>255),
			array('middle_name', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('contact_id, first_name, last_name, middle_name, address_id_fk, contact_phone_id_fk, cell_phone_id_fk', 'safe', 'on'=>'search'),
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
			'addressIdFk' => array(self::BELONGS_TO, 'Address', 'address_id_fk'),
			'contactPhoneIdFk' => array(self::BELONGS_TO, 'Phone', 'contact_phone_id_fk'),
			'cellPhoneIdFk' => array(self::BELONGS_TO, 'Phone', 'cell_phone_id_fk'),
			'merchants' => array(self::HAS_MANY, 'Merchant', 'contact_id_fk'),
			'users' => array(self::HAS_MANY, 'User', 'contact_id_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contact_id' => 'Contact',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'middle_name' => 'Middle Name',
			'address_id_fk' => 'Address',
			'contact_phone_id_fk' => 'Contact Phone',
			'cell_phone_id_fk' => 'Cell Phone',
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

		$criteria->compare('contact_id',$this->contact_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('address_id_fk',$this->address_id_fk);
		$criteria->compare('contact_phone_id_fk',$this->contact_phone_id_fk);
		$criteria->compare('cell_phone_id_fk',$this->cell_phone_id_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**Add the Address for this Contact class
	 */
	protected function addAddress($address)
	{
	  
	  
	}
	
}