<style>
.alternar:hover{ background-color:#B9F8F8;}
</style>
<div class="view">

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm'); ?>

	<div class="row">
		<?php echo $form->labelEx($model_pccn,'Deporte'); ?>
		<?php echo $form->dropDownList($model_pccn,'PCCA_Id',CHtml::ListData(pcca::model()->findAll(),'PCCA_Id','PCCA_Nombre')); ?>
		<?php echo $form->error($model_pccn,'PCCA_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_pccn,'Pais'); ?>
		<?php echo $form->dropDownList($model_pccn,'PCCT_Id',CHtml::ListData(pcct::model()->findAll(),'PCCT_Id','PCCT_Nombre')); ?>
		<?php echo $form->error($model_pccn,'PCCT_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_pccn,'Equipo 1'); ?>
		<?php echo $form->textField($model_pccn,'PCCN_Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model_pccn,'PCCN_Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_pccn,'Equipo 2'); ?>
		<?php echo $form->textField($model_pccn,'PCCN_Nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model_pccn,'PCCN_Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_pcud,'Tipo de Logro'); ?>
		<?php echo $form->dropDownList($model_pcud,'PCUU_Id',CHtml::ListData(pcuu::model()->findAll(),'PCUU_Id','PCUU_Nombre')); ?>
		<?php echo $form->error($model_pcud,'PCUU_Id'); ?>
	</div>
	

	<?php $this->endWidget(); ?>

</div><!-- form -->

	<?php echo CHtml::link('Atras',array('index')); ?>


</div>
