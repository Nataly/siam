<?php

/**
 * This is the model class for table "pccs".
 *
 * The followings are the available columns in table 'pccs':
 * @property integer $PCCS_Id
 * @property integer $PCCI_Id
 * @property string $PCCS_Nombre
 * @property string $PCCS_Sid
 * @property string $PCCS_NombreCompleto
 * @property string $PCCS_FechaInicio
 * @property string $PCCS_FechaFin
 *
 * The followings are the available model relations:
 * @property Pcci $pCCI
 * @property Pcuc[] $pcucs
 */
class Pccs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pccs the static model class
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
		return 'pccs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PCCS_Id, PCCI_Id', 'required'),
			array('PCCS_Id, PCCI_Id', 'numerical', 'integerOnly'=>true),
			array('PCCS_Nombre, PCCS_Sid, PCCS_NombreCompleto, PCCS_FechaInicio, PCCS_FechaFin', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PCCS_Id, PCCI_Id, PCCS_Nombre, PCCS_Sid, PCCS_NombreCompleto, PCCS_FechaInicio, PCCS_FechaFin', 'safe', 'on'=>'search'),
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
			'pCCI' => array(self::BELONGS_TO, 'Pcci', 'PCCI_Id'),
			'pcucs' => array(self::HAS_MANY, 'Pcuc', 'PCCS_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PCCS_Id' => 'Pccs',
			'PCCI_Id' => 'Pcci',
			'PCCS_Nombre' => 'Pccs Nombre',
			'PCCS_Sid' => 'Pccs Sid',
			'PCCS_NombreCompleto' => 'Pccs Nombre Completo',
			'PCCS_FechaInicio' => 'Pccs Fecha Inicio',
			'PCCS_FechaFin' => 'Pccs Fecha Fin',
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

		$criteria->compare('PCCS_Id',$this->PCCS_Id);
		$criteria->compare('PCCI_Id',$this->PCCI_Id);
		$criteria->compare('PCCS_Nombre',$this->PCCS_Nombre,true);
		$criteria->compare('PCCS_Sid',$this->PCCS_Sid,true);
		$criteria->compare('PCCS_NombreCompleto',$this->PCCS_NombreCompleto,true);
		$criteria->compare('PCCS_FechaInicio',$this->PCCS_FechaInicio,true);
		$criteria->compare('PCCS_FechaFin',$this->PCCS_FechaFin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}