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
<?php $form = $this->beginWidget('CActiveForm'); 
//foreach
$z = 3;
echo $this->renderPartial('_logro', array('model'=>$model,'e'=>1 )); ?>

<?php $this->endWidget(); ?>

<?php echo CHtml::submitButton('Guardar'); ?>
<input type="button"  id ="enviar" class="enviar" onclick="enviar()">
<?php
$this->endWidget();
?>
<script type="text/javascript" >

function enviar(){
   document.getElementById('yw1').submit();
}



</script>

