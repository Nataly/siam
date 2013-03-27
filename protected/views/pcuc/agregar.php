<?php $this->menu=array(
	array('label'=>'Regresar', 'url'=>array('index')),
);
?>


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
	
    
    
<?php  
echo CHtml::radioButtonList( 'cars','4', array(4 => 'Manual', 5 => 'Automatico'), array('separator' => '',
        'onChange'=>CHtml::ajax(array('type'=>'GET', 'url'=>array("pcuc/configuracion"), 
        'update'=>'#data')))); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->





