<?php 
class Saludo extends CActiveRecord{

	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function rules(){
		return array (
			array('codigo','required','message'=>'Campos requeridos')
		);
	}
}
?>