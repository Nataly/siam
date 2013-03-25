<?php
/* @var $this GccdController */
/* @var $model Gccd */

$this->breadcrumbs=array(
	'Gccds'=>array('index'),
	'Manage',
);


$this->menu=array(
	array('label'=>'List Gccd', 'url'=>array('index')),
	array('label'=>'Create Gccd', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gccd-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gccds</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gccd-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'GCCD_Id',
		'GCCD_Nombre',
		'GCCD_IdSuperior',
		'gCCU.GCCU_Nombre',
		'GCCD_Telefono',
		'GCCD_Direccion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
