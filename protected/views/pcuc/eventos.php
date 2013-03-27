<style>
    .alternar:hover{ background-color:#B9F8F8;}
</style>

<?php

$this->menu=array(
       array('label' => 'Agregar Eventos', 'url' => array('pcuc/agregar'),'itemOptions'=>array('style'=>'width:268px; top:140px;position:fixed;')),
       
);
?>

 <?php
    
   $pccis = pcci::model()->findAll("PCCA_Id=$deporte");

    foreach ($pccis as $pcci) {
        $pccss = pccs::model()->findAll("PCCI_Id=$pcci->PCCI_Id");

        foreach ($pccss as $pccs) {

            $pcucs = pcuc::model()->findAll("PCCS_Id=$pccs->PCCS_Id"); //LIGAS

            if ($pcucs != null) {
                ?> 
                <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title' => $pccs->pCCI->pCCT->PCCT_Nombre . "-" . $pccs->PCCS_Nombre,
                ));
                ?>

                <table class="table table-striped table-hover table-bordered table-condensed">
                    <thead>
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
                    </thead>

                    <tbody>
                <?php foreach ($pcucs as $data) { ?>
                       

                            <tr class="alternar"  >
                                <td><?php echo $data->PCUC_Id ?></td>
                                <td><?php echo $data->PCUC_Tiempo ?></td>
                                <td><?php echo $data->pCCNIdH->PCCN_Nombre; ?></td>
                                <td><?php echo $data->pCCNIdA->PCCN_Nombre; ?></td>

                                <?php if ($data->PCUC_Estado == "pro") { ?>
                                    <td><?php echo "PROGRAMADO"; ?></td>
                                <?php } ?>

                                <?php if ($data->PCUC_ResultadoH == -1) { ?>
                                    <td><?php ?></td>
                                <?php } else { ?>
                                    <td><?php echo $data->PCUC_ResultadoH; ?></td>
                                <?php } ?>

                                <?php if ($data->PCUC_ResultadoA == -1) { ?>
                                    <td><?php ?></td>
                                <?php } else { ?>
                                    <td><?php echo $data->PCUC_ResultadoA; ?></td>
                                <?php } ?>

                                <?php $pcui = pcui::model()->find("PCUC_Id = " . $data->PCUC_Id . "");
                                if ($pcui !== null) { ?>
                                    <td  ><?php echo "Manual" ?></td>
                                <?php } else { ?>
                                    <td  ><?php echo "Automatico" ?></td>
                    <?php } ?>
                                <td><?php echo CHtml::link('Ver', array('ver', 'id' => $data->PCUC_Id)) ?></td>
                            </tr>
                <?php } ?>
                    </tbody>
                </table>  

                <?php
                $this->endWidget();
                ?>
            <?php }
        } ?>

    <?php } ?>





