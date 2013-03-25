<script language="javascript" type="text/javascript">
$(document).ready(function() {

    $('#example tr').click(function() {
        var href = $(this).find("a").attr("href");
        if(href) {
            window.location = href;
        }
    });

});
</script>
<html>

<style>
.alternar:hover{ background-color:#B9F8F8;}

/*table#example {
    border-collapse: collapse;   
}
#example tr {
    background-color: #eee;
    border-top: 1px solid #fff;
}
#example tr:hover {
    background-color: #ccc;
}
#example th {
    background-color: #fff;
}
#example th, #example td {
    padding: 3px 5px;
}
#example td:hover {
    cursor: pointer;
}*/
</style>


<table  border="1", style="text-align:center">
<tr>
<th colspan="4">Eventos</th>
</tr>
<tr>

	<th style="text-align:center;">Tempo</th>
	<th style="text-align:center;">EquipoH</th>
	<th style="text-align:center;">EquipoA</th>
	<th style="text-align:center;">PCCS_Id</th>
	<th style="text-align:center;">Estado</th>
	<th style="text-align:center;">ResulH</th>
	<th style="text-align:center;">ResulA</th>
</tr>


<?php foreach($pcucs as $data){?>

	<tr  class="alternar"; onclick="Link();" >
	<td style="text-align:center; cursor: pointer;"><?php   ?></td>
	<td style="text-align:center; cursor: pointer;"><?php echo $data->pCCNIdH->PCCN_Nombre;?></td>
	<td style="text-align:center; cursor: pointer;"><?php echo $data->pCCNIdA->PCCN_Nombre;?></td>
	<td style="text-align:center; cursor: pointer;"><?php echo $data->pCCS->pCCI->PCCI_Nombre;?></td>
	<?php if($data->PCUC_Estado == "pro") { ?>
	<td style="text-align:center; cursor: pointer;"><?php echo "PROGRAMADO"; ?></td>
	<?php } ?>
	<?php if($data->PCUC_ResultadoH == -1) { ?>
	<td style="text-align:center; cursor: pointer;"><?php  ?></td>
	<?php }else{ ?>
	<td style="text-align:center; cursor: pointer;"><?php echo $data->PCUC_ResultadoH; ?></td>
	<?php } ?>
	<?php if($data->PCUC_ResultadoA == -1) { ?>
	<td style="text-align:center; cursor: pointer;"><?php  ?></td>
	<?php }else { ?>
	<td style="text-align:center; cursor: pointer;"><?php echo $data->PCUC_ResultadoA; ?></td>
	<?php  } ?>
	
	<td><a href="oranges"></a></td>
	</tr>
<?php } ?>

</table>
</html>