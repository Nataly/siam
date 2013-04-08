<?php setlocale(LC_ALL, "es_ES@euro", "es_ES", "esp"); ?>
<table class="table table-striped table-hover table-bordered table-condensed">
    <thead>
        <tr>

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

            <?php if (strftime("%d/%m/%Y", strtotime($data->PCUC_Tiempo)) == $fecha) { ?>
                <tr class="alternar"  >
                    <td><?php echo $data->PCUC_Id; ?></td>
                    <td><?php echo strftime("%d/%m/%Y %H-%M-%S", strtotime($data->PCUC_Tiempo)); ?></td>
                    <td><?php echo $data->pCCNIdH->PCCN_Nombre; ?></td>
                    <td><?php echo $data->pCCNIdA->PCCN_Nombre; ?></td>

        <?php if($data->PCUC_Estado == "pro") { ?>
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
                        <td><?php echo "Manual" ?></td>
                    <?php } else { ?>
                        <td><?php echo "Automatico" ?></td>
                    <?php } ?>
                        <td><span class="badge badge-info"><?php echo CHtml::link('Ver', array('ver', 'id' => $data->PCUC_Id),array("style"=>"color:white;")) ?></span></td>
                </tr>
    <?php }
} ?>
    </tbody>
</table>  

