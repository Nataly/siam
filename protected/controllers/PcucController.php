<?php

class PcucController extends Controller {

    public $layout = '//layouts/column2';

    public function actionIndex() {
        $model_pcuc = new pcuc();
        $fecha = '22/02/2013';
        if (isset($_POST['pcuc'])) { // valkidamos si trae algun valor en el formulario
            $model_pcuc->attributes = $_POST['pcuc'];
            $this->render('index', array('model_pcuc' => $model_pcuc, 'fecha' => $model_pcuc->PCUC_Tiempo));
        } else {
            $this->render('index', array('model_pcuc' => $model_pcuc, 'fecha' => $fecha));
        }
    }

    public function actionVer($id) {

        $model_pcui = new pcui(); //creo el modelo para traerme la configuracion automativo o manual
        $pcuc = pcuc::model()->find("PCUC_Id = " . $id . "");
        $pcuds = pcud::model()->findAll("PCUC_Id = " . $id . "");
        $pcud = pcud::model()->find("PCUC_Id = " . $id . "");

        if (isset($_POST['pcui'])) { // si selecciono alguna de las opciones auto/manu
            $model_pcui->attributes = $_POST['pcui']; //asigna el valor que trae ya sea 0/1

            $pcui = pcui::model()->find("PCUC_Id = " . $id . ""); //consulto para saber si ya existe o no en la lista negra 

            if ($model_pcui->PCUC_Id == 0) { //si selecciono manual=0
                if ($pcui !== null) { //si existe en la lista negra etonces no intenta agrearlo nuevamente solo se redirecciona 
                    $this->render('ver', array('pcuc' => $pcuc, 'pcuds' => $pcuds, 'pcud' => $pcud, 'model_pcui' => $model_pcui, 'guardo' => '4'));
                } else { //  si no existe en la lista negra lo agrega a la tabla lista negra 
                    $model_pcui->PCUC_Id = $id;
                    $model_pcui->PCCN_IdH = $pcuc->PCCN_IdH;
                    $model_pcui->PCCN_IdA = $pcuc->PCCN_IdA;

                    if ($model_pcui->save()) { //guardo en lista negra 
                        $this->render('agregarLogro', array('pcuc' => $pcuc, 'pcuds' => $pcuds, 'pcud' => $pcud, 'model_pcui' => $model_pcui, 'guardo' => '0'));
                    } else { //si no pudo guardar en lista negra
                        $this->render('ver', array('pcuc' => $pcuc, 'pcuds' => $pcuds, 'pcud' => $pcud, 'model_pcui' => $model_pcui, 'guardo' => '1'));
                    }
                }
            } else { //si la seleccion es !==0 quiere decir que es automatico=1
                if ($pcui !== null) {//si existe en lista negra entonces elimino 
                    $model_pcui = pcui::model()->findByPk($id);
                    if ($model_pcui->delete()) {//se elimina
                        $this->render('ver', array('pcuc' => $pcuc, 'pcuds' => $pcuds, 'pcud' => $pcud, 'model_pcui' => $model_pcui, 'guardo' => '2'));
                    } else {//si no se pudo eliminar 
                        $this->render('ver', array('pcuc' => $pcuc, 'pcuds' => $pcuds, 'pcud' => $pcud, 'model_pcui' => $model_pcui, 'guardo' => '3'));
                    }
                } else { //si no existe en lista negra entonces no se manda a eliminar solo se redirecciona
                    $this->render('ver', array('pcuc' => $pcuc, 'pcuds' => $pcuds, 'pcud' => $pcud, 'model_pcui' => $model_pcui, 'guardo' => '4'));
                }
            }
        } else {// si no selecciono ninguna de las opciones manu/auto
            $this->render('ver', array('pcuc' => $pcuc, 'pcuds' => $pcuds, 'pcud' => $pcud, 'model_pcui' => $model_pcui, 'guardo' => '4'));
        }
    }

    public function actionAgregarEvento() {
        $model_pccn = new pccn();
        $model_pcud = new pcud();
        $this->render('agregarEvento', array('model_pccn' => $model_pccn, 'model_pcud' => $model_pcud));
    }

    public function actionAgregarLogro() {

        $this->render('agregarLogro');
    }

    public function actionConfiguracion() {

        $this->render('configuracion');
    }

}
