
<?php 

$this->widget('zii.widgets.jui.CJuiAccordion', array(
    'panels'=>array(
        'panel 1'=>'Content for panel 1',
        'panel 2'=>'Content for panel 2',
        
    ),
    'options'=>array(
        'collapsible'=>true,
        'active'=>1,
    ),
    'htmlOptions'=>array(
        'style'=>'width:500px;'
    ),
));

?>