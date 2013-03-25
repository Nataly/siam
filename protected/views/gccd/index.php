<?php
/* @var $this GccdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grupos',
);

$this->menu=array(
	array('label'=>'Crear Grupo', 'url'=>array('create')),
	array('label'=>'Administrar Grupo', 'url'=>array('admin')),
);
?>

<h1>Grupos del Sistema</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
