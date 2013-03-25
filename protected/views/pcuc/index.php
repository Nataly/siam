
<?php 

$this->widget('zii.widgets.jui.CJuiAccordion', array(
    'panels'=>array(
        'panel 1'=>'Content for panel 1',
        'panel 2'=>'Content for panel 2',
        'panel 3'=>$this->renderPartial('pages/_content1',null,true),
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