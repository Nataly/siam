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
<h2>TreeView</h2>

<?php $this->widget('CTreeView',
	array(
		'data'=>$data,
		'animated'=>'normal',
		'collapsed'=>true,
		'htmlOptions'=>array('class'=>'treeview-gray'))); ?>

<h2>TreeView Async</h2>

<?php $this->widget('CTreeView',
	array(
		'url'=>array('treeFill'),
		'animated'=>'normal',
		'htmlOptions'=>array('class'=>'treeview-red'))); ?>
