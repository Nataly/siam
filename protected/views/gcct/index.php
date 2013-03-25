<?php
/* @var $this GcctController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gccts',
);

$this->menu=array(
	array('label'=>'Create Gcct', 'url'=>array('create')),
	array('label'=>'Manage Gcct', 'url'=>array('admin')),
);
?>

<h1>Gccts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
