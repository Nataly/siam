<?php
/* @var $this PcuuController */
/* @var $model pcuu */

$this->breadcrumbs=array(
	'Pcuus'=>array('index'),
	$model->PCUU_Id=>array('view','id'=>$model->PCUU_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List pcuu', 'url'=>array('index')),
	array('label'=>'Create pcuu', 'url'=>array('create')),
	array('label'=>'View pcuu', 'url'=>array('view', 'id'=>$model->PCUU_Id)),
	array('label'=>'Manage pcuu', 'url'=>array('admin')),
);
?>

<h1>Update pcuu <?php echo $model->PCUU_Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>