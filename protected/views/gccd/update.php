<?php
/* @var $this GccdController */
/* @var $model Gccd */

$this->breadcrumbs=array(
	'Gccds'=>array('index'),
	$model->GCCD_Id=>array('view','id'=>$model->GCCD_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gccd', 'url'=>array('index')),
	array('label'=>'Create Gccd', 'url'=>array('create')),
	array('label'=>'View Gccd', 'url'=>array('view', 'id'=>$model->GCCD_Id)),
	array('label'=>'Manage Gccd', 'url'=>array('admin')),
);
?>

<h1>Update Gccd <?php echo $model->GCCD_Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>