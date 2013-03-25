<?php

/**
 * This is the model class for table "gccu".
 *
 * The followings are the available columns in table 'gccu':
 * @property integer $GCCU_Id
 * @property string $GCCU_Nombre
 *
 * The followings are the available model relations:
 * @property Gccd[] $gccds
 */
class Gccu extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Gccu the static model class
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
		return 'gccu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GCCU_Nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('GCCU_Id, GCCU_Nombre', 'safe', 'on'=>'search'),
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
			'gccds' => array(self::HAS_MANY, 'Gccd', 'GCCU_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'GCCU_Id' => 'Gccu',
			'GCCU_Nombre' => 'Gccu Nombre',
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

		$criteria->compare('GCCU_Id',$this->GCCU_Id);
		$criteria->compare('GCCU_Nombre',$this->GCCU_Nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}