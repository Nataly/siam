<?php
/* @var $this GccuController */
/* @var $model Gccu */

$this->breadcrumbs=array(
	'Gccus'=>array('index'),
	$model->GCCU_Id=>array('view','id'=>$model->GCCU_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gccu', 'url'=>array('index')),
	array('label'=>'Create Gccu', 'url'=>array('create')),
	array('label'=>'View Gccu', 'url'=>array('view', 'id'=>$model->GCCU_Id)),
	array('label'=>'Manage Gccu', 'url'=>array('admin')),
);
?>

<h1>Update Gccu <?php echo $model->GCCU_Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>