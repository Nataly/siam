<?php
/* @var $this GcctController */
/* @var $model Gcct */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gcct-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCT_Id'); ?>
		<?php echo $form->textField($model,'GCCT_Id'); ?>
		<?php echo $form->error($model,'GCCT_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCT_Nombre'); ?>
		<?php echo $form->textField($model,'GCCT_Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'GCCT_Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCT_Login'); ?>
		<?php echo $form->textField($model,'GCCT_Login',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'GCCT_Login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCT_Clave'); ?>
		<?php echo $form->textField($model,'GCCT_Clave',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'GCCT_Clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCD_Id'); ?>
		<?php echo $form->dropDownList($model,'GCCD_Id',CHtml::ListData(gccd::model()->findAll(),'GCCD_Id','GCCD_Nombre')); ?>
		<?php echo $form->error($model,'GCCD_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCT_Telefono'); ?>
		<?php echo $form->textField($model,'GCCT_Telefono',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'GCCT_Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GCCT_Direccion'); ?>
		<?php echo $form->textField($model,'GCCT_Direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'GCCT_Direccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->