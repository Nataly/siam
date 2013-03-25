<?php

/**
 * This is the model class for table "pcca".
 *
 * The followings are the available columns in table 'pcca':
 * @property integer $PCCA_Id
 * @property string $PCCA_Nombre
 * @property string $PCCA_Fecha
 *
 * The followings are the available model relations:
 * @property Pcci[] $pccis
 * @property Pccn[] $pccns
 */
class pcca extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return pcca the static model class
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
		return 'pcca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PCCA_Id', 'required'),
			array('PCCA_Id', 'numerical', 'integerOnly'=>true),
			array('PCCA_Nombre', 'length', 'max'=>45),
			array('PCCA_Fecha', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PCCA_Id, PCCA_Nombre, PCCA_Fecha', 'safe', 'on'=>'search'),
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
			'pccis' => array(self::HAS_MANY, 'Pcci', 'PCCA_Id'),
			'pccns' => array(self::HAS_MANY, 'Pccn', 'pcca_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PCCA_Id' => 'Pcca',
			'PCCA_Nombre' => 'Pcca Nombre',
			'PCCA_Fecha' => 'Pcca Fecha',
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

		$criteria->compare('PCCA_Id',$this->PCCA_Id);
		$criteria->compare('PCCA_Nombre',$this->PCCA_Nombre,true);
		$criteria->compare('PCCA_Fecha',$this->PCCA_Fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}