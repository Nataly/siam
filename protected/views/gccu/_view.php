<?php
/* @var $this GccuController */
/* @var $data Gccu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCU_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->GCCU_Id), array('view', 'id'=>$data->GCCU_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GCCU_Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->GCCU_Nombre); ?>
	<br />


</div>