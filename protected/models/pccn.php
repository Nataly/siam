<?php

/**
 * This is the model class for table "pccn".
 *
 * The followings are the available columns in table 'pccn':
 * @property integer $PCCN_Id
 * @property string $PCCN_Nombre
 * @property string $PCCN_Grupo
 * @property integer $pcct_Id
 * @property integer $pcca_Id
 *
 * The followings are the available model relations:
 * @property Pcca $pcca
 * @property Pcct $pcct
 * @property Pcuc[] $pcucs
 * @property Pcuc[] $pcucs1
 */
class pccn extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return pccn the static model class
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
		return 'pccn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PCCN_Id, pcct_Id, pcca_Id', 'required'),
			array('PCCN_Id, pcct_Id, pcca_Id', 'numerical', 'integerOnly'=>true),
			array('PCCN_Nombre, PCCN_Grupo', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PCCN_Id, PCCN_Nombre, PCCN_Grupo, pcct_Id, pcca_Id', 'safe', 'on'=>'search'),
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
			'pcca' => array(self::BELONGS_TO, 'Pcca', 'pcca_Id'),
			'pcct' => array(self::BELONGS_TO, 'Pcct', 'pcct_Id'),
			'pcucs' => array(self::HAS_MANY, 'Pcuc', 'PCCN_IdA'),
			'pcucs1' => array(self::HAS_MANY, 'Pcuc', 'PCCN_IdH'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PCCN_Id' => 'Pccn',
			'PCCN_Nombre' => 'Pccn Nombre',
			'PCCN_Grupo' => 'Pccn Grupo',
			'pcct_Id' => 'Pcct',
			'pcca_Id' => 'Pcca',
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

		$criteria->compare('PCCN_Id',$this->PCCN_Id);
		$criteria->compare('PCCN_Nombre',$this->PCCN_Nombre,true);
		$criteria->compare('PCCN_Grupo',$this->PCCN_Grupo,true);
		$criteria->compare('pcct_Id',$this->pcct_Id);
		$criteria->compare('pcca_Id',$this->pcca_Id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}