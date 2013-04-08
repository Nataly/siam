<?php
/* @var $this GccdController */
/* @var $model Gccd */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'GCCD_Id'); ?>
		<?php echo $form->textField($model,'GCCD_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCD_Cod'); ?>
		<?php echo $form->textField($model,'GCCD_Cod',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCD_Nombre'); ?>
		<?php echo $form->textField($model,'GCCD_Nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCD_IdSuperior'); ?>
		<?php echo $form->textField($model,'GCCD_IdSuperior'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCU_Id'); ?>
		<?php echo $form->textField($model,'GCCU_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCD_Telefono'); ?>
		<?php echo $form->textField($model,'GCCD_Telefono',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCD_Direccion'); ?>
		<?php echo $form->textField($model,'GCCD_Direccion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->