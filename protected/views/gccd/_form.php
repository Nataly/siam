<?php
/* @var $this GccdController */
/* @var $model Gccd */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gccd-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCD_Cod'); ?>
		<?php echo $form->textField($model,'GCCD_Cod',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'GCCD_Cod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCD_Nombre'); ?>
		<?php echo $form->textField($model,'GCCD_Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'GCCD_Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCD_IdSuperior'); ?>
		<?php echo $form->textField($model,'GCCD_IdSuperior'); ?>
		<?php echo $form->error($model,'GCCD_IdSuperior'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCU_Id'); ?>
		<?php echo $form->textField($model,'GCCU_Id'); ?>
		<?php echo $form->error($model,'GCCU_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCD_Telefono'); ?>
		<?php echo $form->textField($model,'GCCD_Telefono',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'GCCD_Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCD_Direccion'); ?>
		<?php echo $form->textField($model,'GCCD_Direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'GCCD_Direccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->