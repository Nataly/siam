
<?php if($pcuc->PCUC_Estado == "pro") {
		$estado="PROGRAMADO";
		 }
                 ?>

<?php if($pcuc->PCUC_ResultadoH == -1) { 
		$resulH=" ";
		}else{ 
	$resulH=$pcuc->PCUC_ResultadoH;
		} ?>
<?php if($pcuc->PCUC_ResultadoA == -1) { 
		$resulA=" ";
		}else{ 
	$resulA=$pcuc->PCUC_ResultadoA;
		} ?>

<?php
$gridDataProvider = new CArrayDataProvider(array(
    array('id'=>$pcuc->PCUC_Id, 'Tempo'=>$pcuc->PCUC_Tiempo , 'EquipoH'=>$pcuc->pCCNIdH->PCCN_Nombre,  'EquipoA'=>$pcuc->pCCNIdA->PCCN_Nombre,'Estado'=>$estado,'ResulH'=>$resulH,'ResulA'=>$resulA),
));
?>

<div class="page-header">
  <h1>Evento <small>Logros</small></h1>
</div>

<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>$pcuc->pCCS->pCCI->pCCT->PCCT_Nombre."-".$pcuc->pCCS->PCCS_Nombre,
		));		
?>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(
			/*'type'=>'striped bordered condensed',*/
			'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
			'dataProvider'=>$gridDataProvider,
			'template'=>"{items}",
			'columns'=>array(
				array('name'=>'id', 'header'=>'Codigo'),
				array('name'=>'Tempo', 'header'=>'Tempo'),
				array('name'=>'EquipoH', 'header'=>'EquipoH'),
				array('name'=>'EquipoA', 'header'=>'EquipoA'),
                                array('name'=>'Estado', 'header'=>'Estado'),
                                array('name'=>'ResulH', 'header'=>'ResulH'),
                                array('name'=>'ResulA', 'header'=>'ResulA'),
				
			),
                        
		)); ?>
<?php 
$this->endWidget();
?>

