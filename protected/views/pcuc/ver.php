
<?php
$this->menu = array(
    array('label' => 'Agregar Logro', 'url' => array('create')),
    array('label' => 'Regresar', 'url' => array('index')),
);

if ($pcuc->PCUC_Estado == "pro") {
    $estado = "PROGRAMADO";
} else if ($pcuc->PCUC_Estado == "can") {
    $estado = "CANCELADO";
} else if ($pcuc->PCUC_Estado == "pos") {
    $estado = "POSPUESTO";
} else if ($pcuc->PCUC_Estado == "fin") {
    $estado = "FINALIZADO";
} else if ($pcuc->PCUC_Estado == "pre") {
    $estado = "PREMIADO";
}


if ($pcuc->PCUC_ResultadoH == -1) {
    $resulH = " ";
} else {
    $resulH = $pcuc->PCUC_ResultadoH;
}
if ($pcuc->PCUC_ResultadoA == -1) {
    $resulA = " ";
} else {
    $resulA = $pcuc->PCUC_ResultadoA;
}

$pcui = pcui::model()->find("PCUC_Id = " . $pcuc->PCUC_Id . "");
if ($pcui !== null) {
    $model_pcui->PCUC_Id = 0;
    $log = "Manuales";
} else {
    $model_pcui->PCUC_Id = 1;
    $log = "Automaticos";
}
?>

<div class="page-header">
    <h1>Evento <small>Con Logros <?php echo $log ?></small></h1>
</div>


    <?php $form = $this->beginWidget('CActiveForm'); ?>

    <div style="margin-left: 700px">
        <?php echo $form->labelEx($model_pcui, 'Configraci&oacuten'); ?>
        <?php
        echo $form->radioButtonList($model_pcui, 'PCUC_Id', array('0' => 'Manual', '1' => 'Automatico'), array('separator' => '  ', 'labelOptions' => array('style' => 'display:inline'),
            'onclick' => 'this.form.submit()'
        ));
        ?>
    </div>

    <?php
    $this->endWidget();
    ?>


<?php
$gridDataProvider = new CArrayDataProvider(array(
            array('id' => $pcuc->PCUC_Id, 'Tempo' => $pcuc->PCUC_Tiempo, 'EquipoH' => $pcuc->pCCNIdH->PCCN_Nombre, 'EquipoA' => $pcuc->pCCNIdA->PCCN_Nombre, 'Estado' => $estado, 'ResulH' => $resulH, 'ResulA' => $resulA),
        ));
?>

<?php
$this->beginWidget('zii.widgets.CPortlet', array(
    'title' => $pcuc->pCCS->pCCI->pCCT->PCCT_Nombre . "-" . $pcuc->pCCS->PCCS_Nombre,
));
?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    /* 'type'=>'striped bordered condensed', */
    'itemsCssClass' => 'table table-hover table-striped table-bordered table-condensed',
    'dataProvider' => $gridDataProvider,
    'template' => "{items}",
    'columns' => array(
        array('name' => 'id', 'header' => 'Codigo'),
        array('name' => 'Tempo', 'header' => 'Tempo'),
        array('name' => 'EquipoH', 'header' => 'EquipoH'),
        array('name' => 'EquipoA', 'header' => 'EquipoA'),
        array('name' => 'Estado', 'header' => 'Estado'),
        array('name' => 'ResulH', 'header' => 'ResulH'),
        array('name' => 'ResulA', 'header' => 'ResulA'),
    ),
));
?>

<?php
$this->endWidget();
?>
<?php if ($guardo == 0) { ?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Guardado!</strong> Configuración del evento con logros Manuales.
    </div> 
<?php } else if ($guardo == 1) { ?>
    <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Error!</strong> .
    </div>
<?php } else if ($guardo == 2) { ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Eliminado!</strong> Configuración del evento con logros Automaticos.
    </div>
<?php } else if ($guardo == 3) { ?>
    <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Error!</strong> .
    </div>
<?php } ?>

