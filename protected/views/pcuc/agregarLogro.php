<?php
$this->menu = array(
    array('label' => 'Regresar', 'url' => array('ver', 'id' => $pcuc->PCUC_Id, 'deporte' => $deporte)),
);

?>

<?php
$this->beginWidget('zii.widgets.CPortlet', array(
    'title' => "Logros Manuales",
));
?>
<?php setlocale(LC_ALL, "es_ES@euro", "es_ES", "esp"); ?>
<?php $form = $this->beginWidget('CActiveForm'); ?>
    
    <table class="table table-striped table-hover table-bordered table-condensed">
        <thead>
            <tr>
                <th>Equipo</th>
                <th><div style="float: left; width: 100%; text-align: center;">Juego Completo</div>
        <div style="width: 100%">
            <div style="float: left; width: 34%; text-align: center;">A Ganar/Empate</div>
            <div style="float: left; width: 33%; text-align: center;">Runline</div>
            <div style="float: left; width: 33%; text-align: center;">Alta/Baja</div>
        </div></th>
        <th><div style="float: left; width: 100%; text-align: center;">Medio Juego</div>
        <div style="width: 100%">
            <div style="float: left; width: 34%; text-align: center;">A Ganar/Empate</div>
            <div style="float: left; width: 33%; text-align: center;">Runline</div>
            <div style="float: left; width: 33%; text-align: center;">Alta/Baja</div>
        </div></th>
        <th>
        <div style="float: left; width: 100%; text-align: center;">Extra</div>
        <div style="width: 100%; text-align: center;">SI/NO</div>
        </th>
        </tr>      
        </thead>

        <tbody>
            <tr class="alternar" >
                <td>Equipo 1</td>
                <td><div style="width: 100%">
                        
                        
                        <div style="float: left; width: 17%; text-align: center; position: relative;">
                            <?php echo $form->textField($model_pcud0, '[0]PCUD_O1', array('type'=>"hidden",'size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
                        <div style="float: left; width: 17%; text-align: center; top: 25px; position: relative;">
                            <?php echo $form->textField($model_pcud0, '[0]PCUD_O3', array('size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
                        
                        <div style="float: left; width: 17%; text-align: center; position: relative;">
                            <?php echo $form->textField($model_pcud3, '[3]PCUD_O1', array('size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
                        <div style="float: left; width: 17%; text-align: center; top: 25px; position: relative;">
                            <?php echo $form->textField($model_pcud3, '[3]PCUD_O3', array('size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
                        
                        <div style="float: left; width: 16%; text-align: center; position: relative;">
                            <?php echo $form->textField($model_pcud4, '[4]PCUD_O1', array('size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
                        <div style="float: left; width: 16%; text-align: center; top: 25px; position: relative;">
                            <?php echo $form->textField($model_pcud4, '[4]PCUD_O3', array('size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        
                        </div>
                        </div>
                </td>
                <td>
                </td>
                <td>

                </td>

            </tr>
            <tr class="alternar" >
                <td>Equipo 2</td>
                <td><div style="width: 100%">

                        <div style="float: left; width: 17%; text-align: center; position: relative;">
                            <?php echo $form->textField($model_pcud0, '[0]PCUD_O2', array('size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
                        <div style="float: left; width: 17%; text-align: center;  position: relative;">.</div>
                        
                        <div style="float: left; width: 17%; text-align: center; position: relative;">
                            <?php echo $form->textField($model_pcud3, '[3]PCUD_O2', array('size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
                        <div style="float: left; width: 17%; text-align: center;  position: relative;">.</div>

                        <div style="float: left; width: 16%; text-align: center; position: relative;">
                            <?php echo $form->textField($model_pcud4, '[4]PCUD_O2', array('size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
                        <div style="float: left; width: 16%; text-align: center;  position: relative;">.</div>
                        
                    </div>
                </td>
                <td>
                </td>

                <td></td>
            </tr>

        </tbody>
    </table>  
    <?php echo CHtml::submitButton('Guardar'); ?>
    <?php $this->endWidget(); ?>


<?php
$this->endWidget();
?>
