 <div class="row-fluid">
  <div class="span6">
  	
    <?php
    $this->widget('zii.widgets.jui.CJuiAccordion', array(
		'panels'=>array(
                        'Soccer'=>$this->renderPartial('eventos',array('deporte'=>1),true),
			'Basketball'=>$this->renderPartial('eventos',array('deporte'=>3),true),
			'Baseball'=>$this->renderPartial('eventos',array('deporte'=>7),true),
                        'US Football'=>$this->renderPartial('eventos',array('deporte'=>6),true),
                        'Boxing'=>$this->renderPartial('eventos',array('deporte'=>19),true),
                        'Tennis'=>$this->renderPartial('eventos',array('deporte'=>5),true),
                        'Ice Hockey'=>$this->renderPartial('eventos',array('deporte'=>2),true),
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