<?php
/* @var $this GccdController */
/* @var $model Gccd */

$this->breadcrumbs=array(
	'Grupo'=>array('index'),
	$model->GCCD_Cod,
);

$this->menu=array(
	array('label'=>'Listar Grupo', 'url'=>array('index')),
	array('label'=>'Crear Grupo', 'url'=>array('create')),
	array('label'=>'Actualizar Grupo', 'url'=>array('update', 'id'=>$model->GCCD_Id)),
	array('label'=>'Borrar Grupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->GCCD_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Grupo', 'url'=>array('admin')),
);
?>

<h1>Vista del Grupo #<?php echo $model->GCCD_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'GCCD_Cod',
		'GCCD_Nombre',
		'GCCD_IdSuperior',
		'gCCU.GCCU_Nombre',
		'GCCD_Telefono',
		'GCCD_Direccion',
	),
)); ?>
