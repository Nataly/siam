<?php
/* @var $this GccuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gccus',
);

$this->menu=array(
	array('label'=>'Create Gccu', 'url'=>array('create')),
	array('label'=>'Manage Gccu', 'url'=>array('admin')),
);
?>

<h1>Gccus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
