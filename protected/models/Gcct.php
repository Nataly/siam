<?php

/**
 * This is the model class for table "gcct".
 *
 * The followings are the available columns in table 'gcct':
 * @property integer $GCCT_Id
 * @property string $GCCT_Nombre
 * @property string $GCCT_Login
 * @property string $GCCT_Clave
 * @property integer $GCCD_Id
 * @property string $GCCT_Telefono
 * @property string $GCCT_Direccion
 *
 * The followings are the available model relations:
 * @property Gccd $gCCD
 */
class Gcct extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Gcct the static model class
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
		return 'gcct';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GCCT_Id, GCCD_Id', 'required'),
			array('GCCT_Id, GCCD_Id', 'numerical', 'integerOnly'=>true),
			array('GCCT_Nombre, GCCT_Login, GCCT_Clave, GCCT_Direccion', 'length', 'max'=>45),
			array('GCCT_Telefono', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('GCCT_Id, GCCT_Nombre, GCCT_Login, GCCT_Clave, GCCD_Id, GCCT_Telefono, GCCT_Direccion', 'safe', 'on'=>'search'),
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
			'gCCD' => array(self::BELONGS_TO, 'Gccd', 'GCCD_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'GCCT_Id' => 'Gcct',
			'GCCT_Nombre' => 'Gcct Nombre',
			'GCCT_Login' => 'Gcct Login',
			'GCCT_Clave' => 'Gcct Clave',
			'GCCD_Id' => 'Gccd',
			'GCCT_Telefono' => 'Gcct Telefono',
			'GCCT_Direccion' => 'Gcct Direccion',
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

		$criteria->compare('GCCT_Id',$this->GCCT_Id);
		$criteria->compare('GCCT_Nombre',$this->GCCT_Nombre,true);
		$criteria->compare('GCCT_Login',$this->GCCT_Login,true);
		$criteria->compare('GCCT_Clave',$this->GCCT_Clave,true);
		$criteria->compare('GCCD_Id',$this->GCCD_Id);
		$criteria->compare('GCCT_Telefono',$this->GCCT_Telefono,true);
		$criteria->compare('GCCT_Direccion',$this->GCCT_Direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}