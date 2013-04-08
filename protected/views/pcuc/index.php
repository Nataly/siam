<?php
$this->menu = array(
    array('label' => 'Agregar Eventos', 'url' => array('pcuc/agregarEvento')),
);
?>
<div class="page-header">
    <h1>Eventos <small>del dia <?php echo $model_pcuc->PCUC_Tiempo = $fecha; ?></small></h1>
</div>

<div style=" margin-left: 55%;">  
    <?php
    $form = $this->beginWidget('CActiveForm');
    ?>

    <?php
    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'language' => 'es',
        'model' => $model_pcuc,
        'attribute' => 'PCUC_Tiempo',
        'flat' => false,
        'options' => array(
            'firstDay' => 1,
            //'showOn' => "both",
            //'buttonImage'=>"images/calendar.gif",
            'buttonImageOnly' => true,
            'constrainInput' => true,
            'currentText' => 'Now',
            'dateFormat' => 'dd/mm/yy',
        ),'cssFile'=>'jquery-ui.css',
        'htmlOptions' => array(

        ),
    ));
    ?>
    
    <?php  echo CHtml::submitButton('Buscar'); ?>

    <?php
    $this->endWidget();
    ?>
   
</div>



<div class="row-fluid">
    <div class="span61">

        <?php
        $this->widget('zii.widgets.jui.CJuiAccordion', array(
            'panels' => array(
                'Soccer' => $this->renderPartial('ligas', array('deporte' => 1, 'fecha' => $fecha), true),
                'Basketball' => $this->renderPartial('ligas', array('deporte' => 3, 'fecha' => $fecha), true),
                'Baseball' => $this->renderPartial('ligas', array('deporte' => 7, 'fecha' => $fecha), true),
                'US Football' => $this->renderPartial('ligas', array('deporte' => 6, 'fecha' => $fecha), true),
                'Boxing' => $this->renderPartial('ligas', array('deporte' => 19, 'fecha' => $fecha), true),
                'Tennis' => $this->renderPartial('ligas', array('deporte' => 5, 'fecha' => $fecha), true),
                'Ice Hockey' => $this->renderPartial('ligas', array('deporte' => 2, 'fecha' => $fecha), true),
            ),
            // additional javascript options for the accordion plugin
            'htmlOptions' => array(                
                'style' => 'width:100%;font-size:18px',            ),
            'options' => array(
                'animated' => 'bounceslide',
                'collapsible' => true,
                'active' => 9999,
                'autoHeight' => false,
            ),
        ));
        ?>

    </div>
</div>

 <?php
    
	$this->widget('zii.widgets.jui.CJuiButton', array(
		'name'=>'button2',
		'caption'=>'Save',
		'value'=>'asd1',
		'htmlOptions'=>array('class'=>'btn btn-primary'),
		'onclick'=>new CJavaScriptExpression('function(){alert("Save button has been clicked"); this.blur(); return false;}'),
	));
	
	?>
