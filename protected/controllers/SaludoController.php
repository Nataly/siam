<?php 
class SaludoController extends Controller
{
	
	public function actionIndex(){

		$saludo = 'Ingrese el Codigo';
		$this -> render ('index',array('saludo'=>$saludo));
		exit();

	}


}