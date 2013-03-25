<?php

/**
 * This is the model class for table "pcci".
 *
 * The followings are the available columns in table 'pcci':
 * @property integer $PCCI_Id
 * @property string $PCCI_Nombre
 * @property integer $PCCA_Id
 * @property integer $PCCT_Id
 *
 * The followings are the available model relations:
 * @property Pcca $pCCA
 * @property Pcct $pCCT
 * @property Pccs[] $pccs
 */
class Pcci extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pcci the static model class
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
		return 'pcci';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PCCI_Id, PCCA_Id, PCCT_Id', 'required'),
			array('PCCI_Id, PCCA_Id, PCCT_Id', 'numerical', 'integerOnly'=>true),
			array('PCCI_Nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PCCI_Id, PCCI_Nombre, PCCA_Id, PCCT_Id', 'safe', 'on'=>'search'),
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
			'pCCA' => array(self::BELONGS_TO, 'Pcca', 'PCCA_Id'),
			'pCCT' => array(self::BELONGS_TO, 'Pcct', 'PCCT_Id'),
			'pccs' => array(self::HAS_MANY, 'Pccs', 'PCCI_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PCCI_Id' => 'Pcci',
			'PCCI_Nombre' => 'Pcci Nombre',
			'PCCA_Id' => 'Pcca',
			'PCCT_Id' => 'Pcct',
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

		$criteria->compare('PCCI_Id',$this->PCCI_Id);
		$criteria->compare('PCCI_Nombre',$this->PCCI_Nombre,true);
		$criteria->compare('PCCA_Id',$this->PCCA_Id);
		$criteria->compare('PCCT_Id',$this->PCCT_Id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}