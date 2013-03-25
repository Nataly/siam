<?php
/* @var $this GcctController */
/* @var $model Gcct */

$this->breadcrumbs=array(
	'Gccts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Gcct', 'url'=>array('index')),
	array('label'=>'Create Gcct', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gcct-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gccts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gcct-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'GCCT_Id',
		'GCCT_Nombre',
		'GCCT_Login',
		'GCCT_Clave',
		'GCCD_Id',
		'GCCT_Telefono',
		/*
		'GCCT_Direccion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
