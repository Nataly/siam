<style>
    .alternar:hover{ background-color:#B9F8F8;}
</style>

<?php
$pccis = pcci::model()->findAll("PCCA_Id=$deporte");

foreach ($pccis as $pcci) {
    $pccss = pccs::model()->findAll("PCCI_Id=$pcci->PCCI_Id");

    foreach ($pccss as $pccs) {
        $bool=0;
        $pcucs = pcuc::model()->findAll("PCCS_Id=$pccs->PCCS_Id "); //LIGAS
        
        foreach ($pcucs as $data) {
                if (strftime("%d/%m/%Y", strtotime($data->PCUC_Tiempo)) == $fecha) {
                    $bool=1;
                } }
                
                
        if ($pcucs != null  and $bool==1) {
 
            ?> 
            <?php
            $this->widget('zii.widgets.jui.CJuiAccordion', array(
                'panels' => array(
                    $pccs->pCCI->pCCT->PCCT_Nombre . "-" . $pccs->PCCS_Nombre => $this->renderPartial('eventos', array('pcucs' => $pcucs, 'fecha'=>$fecha, 'deporte'=>$deporte), true),
                ),
                // additional javascript options for the accordion plugin
                'htmlOptions' => array(
                    'style' => 'width:100%;  font-size:12px',
                ),
                'options' => array(
                    'animated' => 'bounceslide',
                    'collapsible' => true,
                    'active' => 9999,
                    'autoHeight' => false,

                )
            ));
            ?>
        <?php } 
    } ?>

<?php } ?>





