<?php
/* @var $this PcuuController */
/* @var $model pcuu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pcuu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PCUU_Id'); ?>
		<?php echo $form->textField($model,'PCUU_Id'); ?>
		<?php echo $form->error($model,'PCUU_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PCUU_Nombre'); ?>
		<?php echo $form->textField($model,'PCUU_Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'PCUU_Nombre'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->