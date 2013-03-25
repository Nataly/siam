<?php
/* @var $this GccuController */
/* @var $model Gccu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'GCCU_Id'); ?>
		<?php echo $form->textField($model,'GCCU_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GCCU_Nombre'); ?>
		<?php echo $form->textField($model,'GCCU_Nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->