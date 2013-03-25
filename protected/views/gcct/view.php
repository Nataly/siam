<?php
/* @var $this GcctController */
/* @var $model Gcct */

$this->breadcrumbs=array(
	'Gccts'=>array('index'),
	$model->GCCT_Id,
);

$this->menu=array(
	array('label'=>'List Gcct', 'url'=>array('index')),
	array('label'=>'Create Gcct', 'url'=>array('create')),
	array('label'=>'Update Gcct', 'url'=>array('update', 'id'=>$model->GCCT_Id)),
	array('label'=>'Delete Gcct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->GCCT_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gcct', 'url'=>array('admin')),
);
?>

<h1>View Gcct #<?php echo $model->GCCT_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'GCCT_Id',
		'GCCT_Nombre',
		'GCCT_Login',
		'GCCT_Clave',
		'GCCD_Id',
		'GCCT_Telefono',
		'GCCT_Direccion',
	),
)); ?>
