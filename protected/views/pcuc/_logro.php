<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'gccd-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('name' => 'gccd-form',"data-ajax"=>"false"),
            ));
    ?>

    <p class="note">Campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>
  
    
        
            <?php for($i=1; $i<4; $i++){ ?>
    <div class="row">
        <div style="float: left; width: 17%; text-align: center; position: relative;">
                            <?php echo $form->textField($model[$i],"[$i]PCUD_O1", array('id'=>$i.'PCUD_O1','size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
                        <div style="float: left; width: 17%; text-align: center; top: 25px; position: relative;">
                            <?php echo $form->textField($model[$i], "[$i]PCUD_O2", array('size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
                        
                        <div style="float: left; width: 17%; text-align: center; position: relative;">
                            <?php echo $form->textField($model[$i],"[$i]PCUD_O3", array('size' => 5, 'maxlength' => 5, 'style' => 'width:30px;')); ?>
                        </div>
        </div>
        <?php } ?>
    

    

    <div class="row buttons">
        <?php /*echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save');*/ ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->