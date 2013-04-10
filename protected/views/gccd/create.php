<?php
/* @var $this GccdController */
/* @var $model Gccd */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Crear Grupo',
);

$this->menu=array(
	array('label'=>'Arbol de Grupos', 'url'=>array('index')),
	array('label'=>'Administrar Grupos', 'url'=>array('admin')),
);
?>

<h1>Crear Grupo </h1>

<?php $model->GCCD_IdSuperior = $_GET['id'];

echo $this->renderPartial('_form', array('model'=>$model )); 


?>