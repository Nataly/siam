<?php
/* @var $this PcuuController */
/* @var $model pcuu */

$this->breadcrumbs=array(
	'Pcuus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List pcuu', 'url'=>array('index')),
	array('label'=>'Manage pcuu', 'url'=>array('admin')),
);
?>

<h1>Create pcuu</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>