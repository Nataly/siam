<?php

/**
 * This is the model class for table "pcud".
 *
 * The followings are the available columns in table 'pcud':
 * @property integer $PCUD_Id
 * @property integer $PCUU_Id
 * @property string $PCUD_Tiempo
 * @property integer $PCUC_Id
 * @property integer $PCCN_IdH
 * @property integer $PCCN_IdA
 * @property string $PCUD_O1
 * @property string $PCUD_O2
 * @property string $PCUD_O3
 * @property string $PCUD_O4
 *
 * The followings are the available model relations:
 * @property Pcua[] $pcuas
 * @property Pcua[] $pcuas1
 * @property Pcua[] $pcuas2
 * @property Pcuc $pCUC
 * @property Pcuc $pCCNIdH
 * @property Pcuc $pCCNIdA
 * @property Pcuu $pCUU
 * @property Pcut[] $pcuts
 * @property Pcut[] $pcuts1
 * @property Pcut[] $pcuts2
 */
class pcud extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return pcud the static model class
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
		return 'pcud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PCUU_Id, PCUD_Tiempo, PCUC_Id, PCCN_IdH, PCCN_IdA', 'required'),
			array('PCUD_Id, PCUU_Id, PCUC_Id, PCCN_IdH, PCCN_IdA', 'numerical', 'integerOnly'=>true),
			array('PCUD_O1, PCUD_O2, PCUD_O3, PCUD_O4', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PCUD_Id, PCUU_Id, PCUD_Tiempo, PCUC_Id, PCCN_IdH, PCCN_IdA, PCUD_O1, PCUD_O2, PCUD_O3, PCUD_O4', 'safe', 'on'=>'search'),
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
			'pcuas' => array(self::HAS_MANY, 'Pcua', 'PCUU_Id'),
			'pcuas1' => array(self::HAS_MANY, 'Pcua', 'PCUD_Tiempo'),
			'pcuas2' => array(self::HAS_MANY, 'Pcua', 'PCUC_Id'),
			'pCUC' => array(self::BELONGS_TO, 'Pcuc', 'PCUC_Id'),
			'pCCNIdH' => array(self::BELONGS_TO, 'Pcuc', 'PCCN_IdH'),
			'pCCNIdA' => array(self::BELONGS_TO, 'Pcuc', 'PCCN_IdA'),
			'pCUU' => array(self::BELONGS_TO, 'Pcuu', 'PCUU_Id'),
			'pcuts' => array(self::HAS_MANY, 'Pcut', 'pcud_PCUU_Id'),
			'pcuts1' => array(self::HAS_MANY, 'Pcut', 'pcud_PCUD_Tiempo'),
			'pcuts2' => array(self::HAS_MANY, 'Pcut', 'pcud_PCUC_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PCUD_Id' => 'Pcud',
			'PCUU_Id' => 'Pcuu',
			'PCUD_Tiempo' => 'Pcud Tiempo',
			'PCUC_Id' => 'Pcuc',
			'PCCN_IdH' => 'Pccn Id H',
			'PCCN_IdA' => 'Pccn Id A',
			'PCUD_O1' => 'Pcud O1',
			'PCUD_O2' => 'Pcud O2',
			'PCUD_O3' => 'Pcud O3',
			'PCUD_O4' => 'Pcud O4',
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

		$criteria->compare('PCUD_Id',$this->PCUD_Id);
		$criteria->compare('PCUU_Id',$this->PCUU_Id);
		$criteria->compare('PCUD_Tiempo',$this->PCUD_Tiempo,true);
		$criteria->compare('PCUC_Id',$this->PCUC_Id);
		$criteria->compare('PCCN_IdH',$this->PCCN_IdH);
		$criteria->compare('PCCN_IdA',$this->PCCN_IdA);
		$criteria->compare('PCUD_O1',$this->PCUD_O1,true);
		$criteria->compare('PCUD_O2',$this->PCUD_O2,true);
		$criteria->compare('PCUD_O3',$this->PCUD_O3,true);
		$criteria->compare('PCUD_O4',$this->PCUD_O4,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}