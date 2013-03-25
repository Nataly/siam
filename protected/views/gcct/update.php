<?php
/* @var $this GcctController */
/* @var $model Gcct */

$this->breadcrumbs=array(
	'Gccts'=>array('index'),
	$model->GCCT_Id=>array('view','id'=>$model->GCCT_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gcct', 'url'=>array('index')),
	array('label'=>'Create Gcct', 'url'=>array('create')),
	array('label'=>'View Gcct', 'url'=>array('view', 'id'=>$model->GCCT_Id)),
	array('label'=>'Manage Gcct', 'url'=>array('admin')),
);
?>

<h1>Update Gcct <?php echo $model->GCCT_Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>