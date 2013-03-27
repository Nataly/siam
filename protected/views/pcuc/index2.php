 <div class="row-fluid">
  <div class="span6">
  	
    <?php
    $this->widget('zii.widgets.jui.CJuiAccordion', array(
		'panels'=>array(
                        'Soccer'=>$this->renderPartial('index',array('deporte'=>1),true),
			'Basketball'=>$this->renderPartial('index',array('deporte'=>3),true),
			'Baseball'=>$this->renderPartial('index',array('deporte'=>7),true),
                        'US Football'=>$this->renderPartial('index',array('deporte'=>6),true),
                        'Boxing'=>$this->renderPartial('index',array('deporte'=>19),true),
                        'Tennis'=>$this->renderPartial('index',array('deporte'=>5),true),
                        'Ice Hockey'=>$this->renderPartial('index',array('deporte'=>2),true),
// panel 5 contains the content rendered by a partial view
			
		),
		// additional javascript options for the accordion plugin
		'htmlOptions'=>array(
                    'style'=>'width:900px;',
                ),
                'options'=>array(
			'animated'=>'bounceslide',
                        'collapsible'=>true,
                        'active'=>9999,
                        'autoHeight'=>false,
                        
		),
	));
	?>
   
  </div>