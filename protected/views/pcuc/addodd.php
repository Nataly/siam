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
echo $this->renderPartial('_logro', array('model'=>$model )); ?>
    
  
    <?php echo CHtml::submitButton('Guardar'); ?>
    <?php $this->endWidget(); ?>


<?php
$this->endWidget();
?>
