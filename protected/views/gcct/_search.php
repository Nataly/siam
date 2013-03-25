<?php
/* @var $this GcctController */
/* @var $model Gcct */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'GCCT_Id'); ?>
		<?php echo $form->textField($model,'GCCT_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCT_Nombre'); ?>
		<?php echo $form->textField($model,'GCCT_Nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCT_Login'); ?>
		<?php echo $form->textField($model,'GCCT_Login',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCT_Clave'); ?>
		<?php echo $form->textField($model,'GCCT_Clave',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCD_Id'); ?>
		<?php echo $form->textField($model,'GCCD_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCT_Telefono'); ?>
		<?php echo $form->textField($model,'GCCT_Telefono',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCT_Direccion'); ?>
		<?php echo $form->textField($model,'GCCT_Direccion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->