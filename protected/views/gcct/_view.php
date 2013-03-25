<?php
/* @var $this GcctController */
/* @var $data Gcct */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->GCCT_Id), array('view', 'id'=>$data->GCCT_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCT_Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->GCCT_Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCT_Login')); ?>:</b>
	<?php echo CHtml::encode($data->GCCT_Login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCT_Clave')); ?>:</b>
	<?php echo CHtml::encode($data->GCCT_Clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCD_Id')); ?>:</b>
	<?php echo CHtml::encode($data->gCCD->GCCD_Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCT_Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->GCCT_Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCT_Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->GCCT_Direccion); ?>
	<br />


</div>