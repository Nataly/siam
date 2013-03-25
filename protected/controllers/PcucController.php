<?php

class PcucController extends Controller
{

	public $layout='//layouts/column2';

	public function actionIndex(){

                $pcca=pcca::model()->findAll("PCCA_Id=1");
                
		//Buscar la primera fila que cumpla con la condicion
		//$pcucs=pcuc::model()->findALL("PCCS_Id=10637");
		//Buscar la primera fila donde la clave primaria sea igual al parametro
		#$pcuc = Pcuc::model()->find(1926578);
		//Buscar la primera fila que cumpla con los parametros de $atributes
		#$pcuc = Pcuc::model()->find("");
		//Buscar la primera fila que arroje el sql ingresado
		#$pcuc = Pcuc::model()->find("");

		//Buscar la primera fila que cumpla con la condicion
		#$pcuc=pcuc::model()->find("PCUC_Id = 1926578");
		//Buscar la primera fila donde la clave primaria sea igual al parametro
		#$pcuc = Pcuc::model()->find(1926578);
		//Buscar la primera fila que cumpla con los parametros de $atributes
		#$pcuc = Pcuc::model()->find("");
		//Buscar la primera fila que arroje el sql ingresado
		#$pcuc = Pcuc::model()->find("");

                $this->render('index', array('pccas'=>$pcca));
		//$this->render('index', array('pcucs'=>$pcucs));


	}

	public function actionView($id){

		
                $pcuc=pcuc::model()->find("PCUC_Id = ".$id."");
		$pcuds=pcud::model()->findAll("PCUC_Id = ".$id."");
		$pcud=pcud::model()->find("PCUC_Id = ".$id."");
                
				
             $this->render('view', array('pcuc'=>$pcuc,'pcuds'=>$pcuds,'pcud'=>$pcud));
	}

	public function actionAdd(){

		$model_pccn=new pccn();
		$model_pcud=new pcud();
		
		$this->render('add',array('model_pccn'=>$model_pccn,'model_pcud'=>$model_pcud));
	}


}
