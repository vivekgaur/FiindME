<?php

/**
 * This is the model class for table "tbl_address".
 *
 * The followings are the available columns in table 'tbl_address':
 * @property integer $address_id
 * @property string $department
 * @property string $company
 * @property string $address_line_1
 * @property string $address_line_2
 * @property integer $city_id_fk
 * @property integer $state_id_fk
 * @property integer $zip_code_id_fk
 * @property integer $country_id_fk
 * @property string $last_update
 *
 * The followings are the available model relations:
 * @property City $cityIdFk
 * @property State $stateIdFk
 * @property Zipcode $zipCodeIdFk
 * @property Country $countryIdFk
 * @property Contact[] $contacts
 */
class Address extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Address the static model class
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
		return 'tbl_address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address_line_1, city_id_fk, state_id_fk, zip_code_id_fk, country_id_fk, last_update', 'required'),
			array('city_id_fk, state_id_fk, zip_code_id_fk, country_id_fk', 'numerical', 'integerOnly'=>true),
			array('department, company, address_line_1, address_line_2', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('address_id, department, company, address_line_1, address_line_2, city_id_fk, state_id_fk, zip_code_id_fk, country_id_fk, last_update', 'safe', 'on'=>'search'),
			array('last_update','default',
			      'value'=>new CDbExpression('NOW()'),
			      'setOnEmpty'=>false,'on'=>'update'),
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
			'cityIdFk' => array(self::BELONGS_TO, 'City', 'city_id_fk'),
			'stateIdFk' => array(self::BELONGS_TO, 'State', 'state_id_fk'),
			'zipCodeIdFk' => array(self::BELONGS_TO, 'Zipcode', 'zip_code_id_fk'),
			'countryIdFk' => array(self::BELONGS_TO, 'Country', 'country_id_fk'),
			'contacts' => array(self::HAS_MANY, 'Contact', 'address_id_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'address_id' => 'Address',
			'department' => 'Department',
			'company' => 'Company',
			'address_line_1' => 'Address Line 1',
			'address_line_2' => 'Address Line 2',
			'city_id_fk' => 'City',
			'state_id_fk' => 'State',
			'zip_code_id_fk' => 'Zip Code',
			'country_id_fk' => 'Country',
			'last_update' => 'Last Update',
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

		$criteria->compare('address_id',$this->address_id);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('address_line_1',$this->address_line_1,true);
		$criteria->compare('address_line_2',$this->address_line_2,true);
		$criteria->compare('city_id_fk',$this->city_id_fk);
		$criteria->compare('state_id_fk',$this->state_id_fk);
		$criteria->compare('zip_code_id_fk',$this->zip_code_id_fk);
		$criteria->compare('country_id_fk',$this->country_id_fk);
		$criteria->compare('last_update',$this->last_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 *Return the list of countries
	 */
	public function getCountryOptions()
	{
	  $countryArray = CHMTL::listData($this->countryIdFk,'country_id','name');
	  return $countryArray;
	}
}