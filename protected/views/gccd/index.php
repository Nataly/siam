<?php
/* @var $this GccdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grupos',
);

$this->menu=array(
	array('label'=>'Crear Grupo', 'url'=>array('create'),'itemOptions'=>array('style'=>'width:268px; top:140px;position:fixed;')),
	array('label'=>'Administrar Grupo', 'url'=>array('admin'),'itemOptions'=>array('style'=>'width:268px; top:185px;position:fixed;')),
);
?>

<h1>Grupos del Sistema</h1>

<?php

 include ("grid.php"); 
/*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */


             ?>
