<?php

/**
 * This is the model class for table "pcui".
 *
 * The followings are the available columns in table 'pcui':
 * @property integer $PCUC_Id
 * @property integer $PCCN_IdH
 * @property integer $PCCN_IdA
 *
 * The followings are the available model relations:
 * @property Pcuc $pCUC
 * @property Pcuc $pCCNIdH
 * @property Pcuc $pCCNIdA
 */
class pcui extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return pcui the static model class
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
		return 'pcui';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PCUC_Id, PCCN_IdH, PCCN_IdA', 'required'),
			array('PCUC_Id, PCCN_IdH, PCCN_IdA', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PCUC_Id, PCCN_IdH, PCCN_IdA', 'safe', 'on'=>'search'),
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
			'pCUC' => array(self::BELONGS_TO, 'Pcuc', 'PCUC_Id'),
			'pCCNIdH' => array(self::BELONGS_TO, 'Pcuc', 'PCCN_IdH'),
			'pCCNIdA' => array(self::BELONGS_TO, 'Pcuc', 'PCCN_IdA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PCUC_Id' => 'Pcuc',
			'PCCN_IdH' => 'Pccn Id H',
			'PCCN_IdA' => 'Pccn Id A',
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

		$criteria->compare('PCUC_Id',$this->PCUC_Id);
		$criteria->compare('PCCN_IdH',$this->PCCN_IdH);
		$criteria->compare('PCCN_IdA',$this->PCCN_IdA);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}