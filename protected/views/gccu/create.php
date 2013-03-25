<?php
/* @var $this GccuController */
/* @var $model Gccu */

$this->breadcrumbs=array(
	'Gccus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gccu', 'url'=>array('index')),
	array('label'=>'Manage Gccu', 'url'=>array('admin')),
);
?>

<h1>Create Gccu</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>