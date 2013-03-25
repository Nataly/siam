<style>
.alternar:hover{ background-color:#B9F8F8;}
</style>
<div class="view">
<table >
	<tr>
		<th>Eventos</th>
	</tr>
<tr >

	<th>Codigo</th>
	<th>Tempo</th>
	<th>EquipoH</th>
	<th>EquipoA</th>
	<th>Grupo</th>
	<th>Estado</th>
	<th>ResulH</th>
	<th>ResulA</th>
</tr>

	<tr>
		<td><?php echo $pcuc->PCUC_Id   ?></td>
		<td><?php echo $pcuc->PCUC_Tiempo   ?></td>
		<td><?php echo $pcuc->pCCNIdH->PCCN_Nombre;?></td>
		<td><?php echo $pcuc->pCCNIdA->PCCN_Nombre;?></td>
		<td><?php echo $pcuc->pCCS->pCCI->PCCI_Nombre;?></td>

		<?php if($pcuc->PCUC_Estado == "pro") { ?>
				<td><?php echo "PROGRAMADO"; ?></td>
		<?php } ?>

		<?php if($pcuc->PCUC_ResultadoH == -1) { ?>
				<td><?php  ?></td>
		<?php }else{ ?>
				<td><?php echo $pcuc->PCUC_ResultadoH; ?></td>
		<?php } ?>

		<?php if($pcuc->PCUC_ResultadoA == -1) { ?>
				<td><?php  ?></td>
		<?php }else { ?>
				<td><?php echo $pcuc->PCUC_ResultadoA; ?></td>
		<?php  } ?>	
	</tr>

</table>
	

<div class="view2">
<?php
	echo CHtml::link(CHtml::radioButtonList('index','',array('0'=>'Manual','1'=>'Automatico'),array('separator'=>' ')),array('#')); 
		
if($pcud!==null ) { ?>

<table >
	<tr>
		<th>LOGROS   <?=$pcud->pCUU->PCUU_Nombre; ?></th>
	</tr>
<tr >
	<th>Tiempo</th>
	<th>O1</th>
	<th>O2</th>
	<th>O3</th>
</tr>
<?php foreach($pcuds as $pcud){?>
	<tr class="alternar" >
		<td><?php echo $pcud->PCUD_Tiempo; ?></td>
		<td><?php echo $pcud->PCUD_O1; ?></td>
		<td><?php echo $pcud->PCUD_O2; ?></td>
		<td><?php echo $pcud->PCUD_O3; ?></td>
	</tr>
<?php } ?>
</table>

<?php }else { 
		echo "No se poseen LOGROS asignados a este evento"; } ?>
</div>

	<?php echo CHtml::link('Atras',array('index')); ?>

</div>