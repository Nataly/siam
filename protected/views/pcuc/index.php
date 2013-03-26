<style>
    .alternar:hover{ background-color:#B9F8F8;}
</style>


<?php echo CHtml::link('Agregar Eventos', array('pcuc/add')); ?>



<?php foreach ($pccas as $pcca) { ?>    
    <li><?php echo $pcca->PCCA_Nombre; ?>
        <?php $pccis = pcci::model()->findAll("PCCA_Id=$pcca->PCCA_Id"); ?>
        
        <?php foreach ($pccis as $pcci) { ?>
            <?php $pccss = pccs::model()->findAll("PCCI_Id=$pcci->PCCI_Id"); ?> 
            
            <?php foreach ($pccss as $pccs) { ?>
                <?php echo "<br>" . $pccs->pCCI->pCCT->PCCT_Nombre . "-" . $pccs->PCCS_Nombre; ?> 

                <?php $pcucs = pcuc::model()->findAll("PCCS_Id=$pccs->PCCS_Id"); ?> 
    <table >
	<tr>
		<th>Eventos</th>
	</tr>
    <tr >

	<th>Codigo</th>
	<th>Tempo</th>
	<th>EquipoH</th>
	<th>EquipoA</th>
	<th>Estado</th>
	<th>ResulH</th>
	<th>ResulA</th>
	<th>Configuracion</th>
</tr>      
   


<?php foreach($pcucs as $data){?>

	<tr class="alternar"  >
		<td><?php echo $data->PCUC_Id   ?></td>
		<td><?php echo $data->PCUC_Tiempo   ?></td>
		<td><?php echo $data->pCCNIdH->PCCN_Nombre;?></td>
		<td><?php echo $data->pCCNIdA->PCCN_Nombre;?></td>

		<?php if($data->PCUC_Estado == "pro") { ?>
				<td><?php echo "PROGRAMADO"; ?></td>
		<?php } ?>

		<?php if($data->PCUC_ResultadoH == -1) { ?>
				<td><?php  ?></td>
		<?php }else{ ?>
				<td><?php echo $data->PCUC_ResultadoH; ?></td>
		<?php } ?>
		
		<?php if($data->PCUC_ResultadoA == -1) { ?>
				<td><?php  ?></td>
		<?php }else { ?>
				<td><?php echo $data->PCUC_ResultadoA; ?></td>
		<?php  } ?>

		<?php $pcui=pcui::model()->find("PCUC_Id = ".$data->PCUC_Id ."");	
			if ( $pcui!==null){ ?>
				<td  ><?php echo "Manual"  ?></td>
			<?php }else {?>
				<td  ><?php echo "Automatico"  ?></td>
			<?php }  ?>
				<td><?php echo CHtml::link('Ver',array('view','id'=>$data->PCUC_Id)) ?></td>
	</tr>
<?php } ?>

</table>   
            <?php } ?>
        
        <?php } ?>

    </li>
<?php } ?>
