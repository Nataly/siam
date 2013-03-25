<?php
/* @var $this PcuuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pcuus',
);

$this->menu=array(
	array('label'=>'Create pcuu', 'url'=>array('create')),
	array('label'=>'Manage pcuu', 'url'=>array('admin')),
);
?>

<h1>Pcuus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
