<?php
/* @var $this GccdController */
/* @var $data Gccd */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCD_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->GCCD_Id), array('view', 'id'=>$data->GCCD_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCD_Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->GCCD_Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCD_IdSuperior')); ?>:</b>
	<?php echo CHtml::encode($data->GCCD_IdSuperior); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCU_Id')); ?>:</b>
	<?php echo CHtml::encode($data->gCCU->GCCU_Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCD_Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->GCCD_Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCD_Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->GCCD_Direccion); ?>
	<br />


</div>


