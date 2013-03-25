<?php
/* @var $this PcuuController */
/* @var $data pcuu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PCUU_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PCUU_Id), array('view', 'id'=>$data->PCUU_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PCUU_Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->PCUU_Nombre); ?>
	<br />


</div>