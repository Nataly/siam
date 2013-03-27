<?php

class PcucController extends Controller
{

	public $layout='//layouts/column2';

           
	public function actionIndex(){
                $this->render('index');
		}

	public function actionVer($id){
                $model_pcui=new pcui();
                $pcuc=pcuc::model()->find("PCUC_Id = ".$id."");
		$pcuds=pcud::model()->findAll("PCUC_Id = ".$id."");
		$pcud=pcud::model()->find("PCUC_Id = ".$id."");	
                $this->render('ver', array('pcuc'=>$pcuc,'pcuds'=>$pcuds,'pcud'=>$pcud,'model_pcui'=>$model_pcui));
	}
        
        
	public function actionAgregar(){

		$model_pccn=new pccn();
		$model_pcud=new pcud();
		$this->render('agregar',array('model_pccn'=>$model_pccn,'model_pcud'=>$model_pcud));
	}
        
        public function actionConfiguracion(){
  		
                $this->render('configuracion');
	}

        public function actionManuauto($type){
  		
                   $this->render('configuracion'); 
                
	}
}
