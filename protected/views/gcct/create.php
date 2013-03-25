<?php
/* @var $this GcctController */
/* @var $model Gcct */

$this->breadcrumbs=array(
	'Gccts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gcct', 'url'=>array('index')),
	array('label'=>'Manage Gcct', 'url'=>array('admin')),
);
?>

<h1>Create Gcct</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>