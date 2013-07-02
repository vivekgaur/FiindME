<?php

/**
 * This is the model class for table "tbl_state".
 *
 * The followings are the available columns in table 'tbl_state':
 * @property integer $state_id
 * @property string $name
 * @property integer $country_id_fk
 *
 * The followings are the available model relations:
 * @property Address[] $addresses
 * @property City[] $cities
 * @property Country $countryIdFk
 * @property Zipcode[] $zipcodes
 */
class State extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return State the static model class
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
		return 'tbl_state';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, country_id_fk', 'required'),
			array('country_id_fk', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('state_id, name, country_id_fk', 'safe', 'on'=>'search'),
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
			'addresses' => array(self::HAS_MANY, 'Address', 'state_id_fk'),
			'cities' => array(self::HAS_MANY, 'City', 'state_id_fk'),
			'countryIdFk' => array(self::BELONGS_TO, 'Country', 'country_id_fk'),
			'zipcodes' => array(self::HAS_MANY, 'Zipcode', 'state_id_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'state_id' => 'State',
			'name' => 'Name',
			'country_id_fk' => 'Country Id Fk',
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

		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('country_id_fk',$this->country_id_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}