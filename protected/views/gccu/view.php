<?php
/* @var $this GccuController */
/* @var $model Gccu */

$this->breadcrumbs=array(
	'Gccus'=>array('index'),
	$model->GCCU_Id,
);

$this->menu=array(
	array('label'=>'List Gccu', 'url'=>array('index')),
	array('label'=>'Create Gccu', 'url'=>array('create')),
	array('label'=>'Update Gccu', 'url'=>array('update', 'id'=>$model->GCCU_Id)),
	array('label'=>'Delete Gccu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->GCCU_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gccu', 'url'=>array('admin')),
);
?>

<h1>View Gccu #<?php echo $model->GCCU_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'GCCU_Id',
		'GCCU_Nombre',
	),
)); ?>
