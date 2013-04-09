<?php

/**
 * This is the model class for table "gccd".
 *
 * The followings are the available columns in table 'gccd':
 * @property integer $GCCD_Id
 * @property string $GCCD_Cod
 * @property string $GCCD_Nombre
 * @property integer $GCCD_IdSuperior
 * @property integer $GCCU_Id
 * @property string $GCCD_Telefono
 * @property string $GCCD_Direccion
 *
 * The followings are the available model relations:
 * @property Gcca[] $gccas
 * @property Gccd $gCCDIdSuperior
 * @property Gccd[] $gccds
 * @property Gccu $gCCU
 * @property Gcci[] $gccis
 * @property Gcct[] $gccts
 */
class Gccd extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Gccd the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'gccd';
    }

    /*
     * 
     * 
     */

    public function getConcatened() {
        return $this->GCCD_Cod . ' - ' . $this->GCCD_Nombre;
    }
     public function getManagers()
        {
                $criteria=new CDbCriteria;
                

                $models = GCCD::model()->findAll($criteria);
 
                $list = CHtml::listData($models, 'GCCD_Id', 'concatened');
                
                return $list;
        }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('GCCD_Cod, GCCU_Id', 'required'),
            array('GCCD_IdSuperior, GCCU_Id', 'numerical', 'integerOnly' => true),
            array('GCCD_Cod, GCCD_Nombre, GCCD_Direccion', 'length', 'max' => 45),
            array('GCCD_Telefono', 'length', 'max' => 30),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('GCCD_Id, GCCD_Cod, GCCD_Nombre, GCCD_IdSuperior, GCCU_Id, GCCD_Telefono, GCCD_Direccion', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'gccas' => array(self::HAS_MANY, 'Gcca', 'GCCD_Id'),
            'gCCDIdSuperior' => array(self::BELONGS_TO, 'Gccd', 'GCCD_IdSuperior'),
            'gccds' => array(self::HAS_MANY, 'Gccd', 'GCCD_IdSuperior'),
            'gCCU' => array(self::BELONGS_TO, 'Gccu', 'GCCU_Id'),
            'gccis' => array(self::HAS_MANY, 'Gcci', 'GCCD_Id'),
            'gccts' => array(self::HAS_MANY, 'Gcct', 'GCCD_Id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'GCCD_Id' => 'Gccd',
            'GCCD_Cod' => 'Gccd Cod',
            'GCCD_Nombre' => 'Gccd Nombre',
            'GCCD_IdSuperior' => 'Gccd Id Superior',
            'GCCU_Id' => 'Gccu',
            'GCCD_Telefono' => 'Gccd Telefono',
            'GCCD_Direccion' => 'Gccd Direccion',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('GCCD_Id', $this->GCCD_Id);
        $criteria->compare('GCCD_Cod', $this->GCCD_Cod, true);
        $criteria->compare('GCCD_Nombre', $this->GCCD_Nombre, true);
        $criteria->compare('GCCD_IdSuperior', $this->GCCD_IdSuperior);
        $criteria->compare('GCCU_Id', $this->GCCU_Id);
        $criteria->compare('GCCD_Telefono', $this->GCCD_Telefono, true);
        $criteria->compare('GCCD_Direccion', $this->GCCD_Direccion, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}