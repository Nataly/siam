<?php
/* @var $this GccdController */
/* @var $model Gccd */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'gccd-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'Codigo *'); ?>
        <?php echo $form->textField($model, 'GCCD_Cod', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'GCCD_Cod'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Nombre'); ?>
        <?php echo $form->textField($model, 'GCCD_Nombre', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'GCCD_Nombre'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Grupo Padre'); ?>

        <?php $var = Gccd::model()->getManagers(); ?>
        <?php echo $form->dropDownList($model, 'GCCD_IdSuperior',$var,array('empty'=>'Sin Padre'));
         //echo CHtml::dropDownList('GCCD_IdSuperior', $_GET['id'], $var);
            //echo $form->dropDownList($model, 'GCCD_IdSuperior', $_GET['id'], $var,array('empty'=>'Seleccione'));?>
        <?php echo $form->error($model, 'GCCD_IdSuperior'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Esquema Grupo'); ?>
        <?php echo $form->dropDownList($model, 'GCCU_Id',CHtml::ListData(Gccu::model()->findAll(),'GCCU_Id','GCCU_Nombre'),array('empty'=>'Seleccione'));?>
        <?php echo $form->error($model, 'GCCU_Id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Telefono'); ?>
        <?php echo $form->textField($model, 'GCCD_Telefono', array('size' => 30, 'maxlength' => 30)); ?>
        <?php echo $form->error($model, 'GCCD_Telefono'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Direccion'); ?>
        <?php echo $form->textField($model, 'GCCD_Direccion', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'GCCD_Direccion'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->