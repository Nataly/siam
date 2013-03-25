<?php
/* @var $this GccdController */
/* @var $model Gccd */

$this->breadcrumbs=array(
	'Gccds'=>array('index'),
	$model->GCCD_Id,
);

$this->menu=array(
	array('label'=>'List Gccd', 'url'=>array('index')),
	array('label'=>'Create Gccd', 'url'=>array('create')),
	array('label'=>'Update Gccd', 'url'=>array('update', 'id'=>$model->GCCD_Id)),
	array('label'=>'Delete Gccd', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->GCCD_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gccd', 'url'=>array('admin')),
);
?>

<h1>View Gccd #<?php echo $model->GCCD_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'GCCD_Id',
		'GCCD_Nombre',
		'GCCD_IdSuperior',
		'gCCU.GCCU_Nombre',
		'GCCD_Telefono',
		'GCCD_Direccion',
	),
)); ?>
