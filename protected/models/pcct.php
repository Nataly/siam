<?php

/**
 * This is the model class for table "pcct".
 *
 * The followings are the available columns in table 'pcct':
 * @property integer $PCCT_Id
 * @property string $PCCT_Alias
 * @property string $PCCT_Nombre
 *
 * The followings are the available model relations:
 * @property Pcci[] $pccis
 * @property Pccn[] $pccns
 */
class pcct extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return pcct the static model class
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
		return 'pcct';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PCCT_Id', 'required'),
			array('PCCT_Id', 'numerical', 'integerOnly'=>true),
			array('PCCT_Alias, PCCT_Nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PCCT_Id, PCCT_Alias, PCCT_Nombre', 'safe', 'on'=>'search'),
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
			'pccis' => array(self::HAS_MANY, 'Pcci', 'PCCT_Id'),
			'pccns' => array(self::HAS_MANY, 'Pccn', 'pcct_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PCCT_Id' => 'Pcct',
			'PCCT_Alias' => 'Pcct Alias',
			'PCCT_Nombre' => 'Pcct Nombre',
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

		$criteria->compare('PCCT_Id',$this->PCCT_Id);
		$criteria->compare('PCCT_Alias',$this->PCCT_Alias,true);
		$criteria->compare('PCCT_Nombre',$this->PCCT_Nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}