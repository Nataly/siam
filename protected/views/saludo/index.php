
<?php $this->pageTitle= 'Confirmar'; 
$this->breadcrumbs=array(
	'Confirmación',
);

?>

<h1>Codigo de Confirmacion<h1>
<?php $from=$this->beginWidget('CActiveForm'); ?>
<div>




</div>
<?php echo CHtml::submitButton('Ingresar');?>
<?php
$this->endWidget();
?>
