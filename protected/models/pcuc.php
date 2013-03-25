<?php

class pcuc extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return pcuc the static model class
     */
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'pcuc';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('PCUC_Id, PCCN_IdH, PCCN_IdA, PCCS_Id', 'required'),
            array('PCUC_Id, PCCN_IdH, PCCN_IdA, PCCS_Id', 'numerical', 'integerOnly' => true),
            array('PCUC_ResultadoH, PCUC_ResultadoA', 'length', 'max' => 45),
            array('PCUC_Estado', 'length', 'max' => 3),
            array('PCUC_Tiempo', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('PCUC_Id, PCUC_ResultadoH, PCUC_ResultadoA, PCUC_Tiempo, PCCN_IdH, PCCN_IdA, PCCS_Id, PCUC_Estado', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'pCCNIdA' => array(self::BELONGS_TO, 'Pccn', 'PCCN_IdA'),
            'pCCNIdH' => array(self::BELONGS_TO, 'Pccn', 'PCCN_IdH'),
            'pCCS' => array(self::BELONGS_TO, 'Pccs', 'PCCS_Id'),
            'pcuds' => array(self::HAS_MANY, 'Pcud', 'PCUC_Id'),
            'pcuds1' => array(self::HAS_MANY, 'Pcud', 'PCCN_Id1'),
            'pcuds2' => array(self::HAS_MANY, 'Pcud', 'PCCN_Id2'),
            'pcuis' => array(self::HAS_MANY, 'Pcui', 'pcuc_PCUC_Id'),
            'pcuis1' => array(self::HAS_MANY, 'Pcui', 'pcuc_PCCN_Id1'),
            'pcuis2' => array(self::HAS_MANY, 'Pcui', 'pcuc_PCCN_Id2'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'PCUC_Id' => 'Pcuc',
            'PCUC_ResultadoH' => 'Pcuc Resultado H',
            'PCUC_ResultadoA' => 'Pcuc Resultado A',
            'PCUC_Tiempo' => 'Pcuc Tiempo',
            'PCCN_IdH' => 'Pccn Id H',
            'PCCN_IdA' => 'Pccn Id A',
            'PCCS_Id' => 'Pccs',
            'PCUC_Estado' => 'Pcuc Estado',
        );
    }

    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('PCUC_Id', $this->PCUC_Id);
        $criteria->compare('PCUC_ResultadoH', $this->PCUC_ResultadoH, true);
        $criteria->compare('PCUC_ResultadoA', $this->PCUC_ResultadoA, true);
        $criteria->compare('PCUC_Tiempo', $this->PCUC_Tiempo, true);
        $criteria->compare('PCCN_IdH', $this->PCCN_IdH);
        $criteria->compare('PCCN_IdA', $this->PCCN_IdA);
        $criteria->compare('PCCS_Id', $this->PCCS_Id);
        $criteria->compare('PCUC_Estado', $this->PCUC_Estado, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}