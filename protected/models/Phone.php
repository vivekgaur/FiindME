<?php

/**
 * This is the model class for table "tbl_phone".
 *
 * The followings are the available columns in table 'tbl_phone':
 * @property integer $phone_id
 * @property integer $country_code
 * @property integer $area_code
 * @property integer $number
 * @property integer $extn
 *
 * The followings are the available model relations:
 * @property Contact[] $contacts
 * @property Contact[] $contacts1
 */
class Phone extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Phone the static model class
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
		return 'tbl_phone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('country_code, area_code, number, extn', 'required'),
			array('country_code, area_code, number, extn', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('phone_id, country_code, area_code, number, extn', 'safe', 'on'=>'search'),
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
			'contacts' => array(self::HAS_MANY, 'Contact', 'contact_phone_id_fk'),
			'contacts1' => array(self::HAS_MANY, 'Contact', 'cell_phone_id_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'phone_id' => 'Phone',
			'country_code' => 'Country Code',
			'area_code' => 'Area Code',
			'number' => 'Number',
			'extn' => 'Extn',
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

		$criteria->compare('phone_id',$this->phone_id);
		$criteria->compare('country_code',$this->country_code);
		$criteria->compare('area_code',$this->area_code);
		$criteria->compare('number',$this->number);
		$criteria->compare('extn',$this->extn);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}