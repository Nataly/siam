<?php
/* @var $this GccdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Grupos',
);

$this->menu = array(
    array('label' => 'Administrar Grupos', 'url' => array('admin')),
);
?>

<h1>Arbol de Grupos</h1>


<?php
echo $arbol;
?>



<?php
Yii::app()->clientScript->registerScript('botones', ' 
    $(".group").hover(
      function () {
        $(this).append($("<a href=\"create/"+$(this).attr("id")+"\" class=\"new\"></a><a href=\"update/"+$(this).attr("id")+"\" class=\"edit\"></a>"));
      }, 
      function () {
        $(this).find("a:last").remove();$(this).find("a:last").remove();
      }
    );
    $(function() {
        $("#browser").treeview({	
            persist: "location",
            collapsed: true,
            unique: true
        });
    })
    ');
?>
