<?php
/* @var $this PcuuController */
/* @var $model pcuu */

$this->breadcrumbs=array(
	'Pcuus'=>array('index'),
	$model->PCUU_Id,
);

$this->menu=array(
	array('label'=>'List pcuu', 'url'=>array('index')),
	array('label'=>'Create pcuu', 'url'=>array('create')),
	array('label'=>'Update pcuu', 'url'=>array('update', 'id'=>$model->PCUU_Id)),
	array('label'=>'Delete pcuu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PCUU_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage pcuu', 'url'=>array('admin')),
);
?>

<h1>View pcuu #<?php echo $model->PCUU_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PCUU_Id',
		'PCUU_Nombre',
	),
)); ?>
