<?php
/* @var $this GccdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Gccds',
);

$this->menu = array(
    array('label' => 'Create Gccd', 'url' => array('create')),
    array('label' => 'Manage Gccd', 'url' => array('admin')),
);
?>

<h1>Gccds</h1>


        <?php
       echo $arbol;
        ?>
    </ul>
</div>

<!--
<ul id="browser" class="filetree treeview-famfamfam treeview">
    <li class="collapsable">
        <div class="hitarea  collapsable-hitarea">
            
        </div>
        <span class="banca">
            <a href="#" style="text-decoration: none;" class="">1 | Excelencia C.A</a>
        </span>
        <ul style="display: block;">
            <li class="closed collapsable">
                <div class="hitarea closed-hitarea  collapsable-hitarea">
                    
                </div>
                <span class="receptor"><a href="#" title="Cargar contenido" style="text-decoration: none;" class="">01 | JESUS PREGONERO</a>
                </span>
                <ul style="display: block;">
                    <li class="closed collapsable lastCollapsable"><div class="hitarea closed-hitarea collapsable-hitarea lastCollapsable-hitarea"></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=01&ven=01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
" class="">01 | JESUS</a></span> <ul id="folder21" style="display: block;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=165&gr=01&ven=01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">165 - MIS TIAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=189&gr=01&ven=01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">189 - EL ZURDO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=221&gr=01&ven=01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">221 - NEIMAR I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=223&gr=01&ven=01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">223 - mis tias II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=224&gr=01&ven=01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">224 - NEIMAR 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONAL&gr=01&ven=01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONAL - ADICIONAL</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=01&ven=01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">ANBARINAS | ANTONIO TEHERAN</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT00 | ANTONIO TEHERAN</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONAL&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONAL - ADICIONAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT01&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT01 - AGENCIA DE LOT. EL POLLO I </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT02&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT02 - AGENCIA MICHEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT03&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT03 - AGENCIA DOÃ‘A TINA AVENIDA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT04&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT04 - AG. DE LOT. EL POLLO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT05&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT05 - AGENCIA DE LOT. LA BOMBA Q</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT06&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT06 - AGENCIA CRUZ PAREDES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT07&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT07 - AGENCIA DE LOT. FRANMARY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT08&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT08 - AGENCIA DE LOT. BRISMAR II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT09&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT09 - AGENCIA DE LOT. BRISMAR III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT1&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT1 - BOGOTANO I </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT10&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT10 - AGENCIA DE LOT. BRISMAR I </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT11&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT11 - AGENCIA DE LOT. LA PIONERA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT12&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT12 - AGENCIA DE LOT. DAVID</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT13&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT13 - AGENCIA DE LOT. JOSE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT14&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT14 - AGENCIA DE LOT. GITANA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT15&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT15 - AGENCIA DE LOT. GUANAPA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT16&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT16 - AGENCIA DE LOT. EL REMATE </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT17&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT17 - ANTONIO 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT18&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT18 - ANTONIO 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT19&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT19 - ANTONIO 3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT20&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT20 - ANTONIO 4</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT21&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT21 - ANTONIO 5</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AT22&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AT22 - ANTONIO 6</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MSM&gr=AT00&ven=ANBARINAS&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MSM - MSM</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">AR01 | ARMANDO</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR001 | ARMANDO</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=065&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">065 - TIGRE VISUALOTTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=072&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">072 - NEIMAR VISUALOTTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=077&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">077 - AGENCIA LUIS VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=285&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">285 - AG ALEXANDER </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR01&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR01 - EL TIGRE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR02&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR02 - 0002</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR03&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR03 - FLOR MARINA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR0301&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR0301 - AGENCIA FLOR MARINA VISUALOTO FISCAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR04&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR04 - LA FORTALEZA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR05&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR05 - PEDRO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR06&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR06 - 0006</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR07&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR07 - ANGIE visualoto</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR08&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR08 - EL CEMENTERIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR09&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR09 - ALEXANDER</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR10&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR10 - 0010</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR11&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR11 - ARELIS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR12&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR12 - AR0012</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR13&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR13 - NUBIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR14&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR14 - YOMARLY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR15&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR15 - 0015</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR16&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR16 - MIRIAN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR17&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR17 - CORDERO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR18&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR18 - EWDUAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR21&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR21 - SRR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR22&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR22 - ZULAY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR23&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR23 - EL LIDER DE LAS LOTERIAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR24&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR24 - AGENCIA YELUIS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR25&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR25 - FORTUNA PLAZA ENANOS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR26&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR26 - EYOYUMA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR27&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR27 - ALIX</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR28&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR28 - NEIMAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR29&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR29 - LISBETH</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR30&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR30 - EL TIGRE II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR31&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR31 - TIGRE III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR32&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR32 - VISIMEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR33&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR33 - PATIECITOS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR34&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR34 - FORTUNA MICHELENA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR35&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR35 - RAMIRO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR36&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR36 - DON JORGUE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR37&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR37 - CARACOL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR38&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR38 - ALDEMAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR39&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR39 - LIDER DE LAS LOTERIAS PIÃ‘AL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR40&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR40 - EL VIVERO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR41&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR41 - MARIA ALEJANDRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR42&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR42 - PATIECITOS II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR43&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR43 - GARCIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR44&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR44 - FORTUNA PIÃ‘AL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR45&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR45 - AG. CAMPO NEBLINA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR46&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR46 - LIDER III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR47&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR47 - AGENCIA LIDER IV PIÃ‘AL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR48&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR48 - JUNCO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR49&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR49 - ROMINA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR50&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR50 - EL DIAMANTE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR51&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR51 - DON JORGUE II</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=AR001&ven=AR01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">BA01 | SIMON MATOS Y MEY</a></span><ul style="display: none;"><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA01 | SIMON MATOS Y MEY</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA01&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA01 - AG. LA CHIQUITICA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA02&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA02 - AG. GRETTY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA03&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA03 - AGENCIA ISMAEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA04&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA04 - AG. GRAN SUERTE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA05&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA05 - AG. KIOSCO MIAMI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA06&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA06 - AG. KIOSCO POLICIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA10&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA10 - AG. BOGOTANO 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA11&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA11 - AG. BOGOTANO 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA12&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA12 - AG. LA ACUARIANA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA13&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA13 - AG. TRIPLE 3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA14&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA14 - AG. BUENA FE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA15&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA15 - AG. EL REGAZO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA16&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA16 - INV. VIRGEN DE LA PAZ</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA17&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA17 - AG. LA FAVORITA 4</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA18&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA18 - AGENCIA LUISMAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA19&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA19 - AG. LOS JARDINES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA21&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA21 - AG. LAS MARAVILLAS 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA22&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA22 - AGENCIA MELIET</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA23&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA23 - AGENCIA JUANCHO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA24&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA24 - AG. LA PAVITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA25&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA25 - MI CHINA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA26&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA26 - AGENCIA ISMAEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA27&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA27 - AGENCIA LUZMAR 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA28&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA28 - AGENCIA LUZMAR 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA29&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA29 - AGENCIA MILANO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA31&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA31 - AG. LA POPULAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA32&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA32 - AG. MI COMPADRE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA34&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA34 - PRUEBA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA35&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA35 - AGENCIA IRIS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA36&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA36 - AGENCIA ADRIANA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA37&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA37 - AG. MARIA JOSE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA38&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA38 - MEY BARINAS 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA39&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA39 - MEY BARINAS 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA40&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA40 - MEY BARINAS 3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA41&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA41 - MEY BARINAS 4</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA42&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA42 - MEY BARINAS 5</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA43&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA43 - AGENCIA SANTA BARBARA I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA44&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA44 - AGENCIA SANTA BARBARA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA45&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA45 - AGENCIA LA PERSEVERANCIA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA46&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA46 - AGENCIA CHAVETAZO I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA47&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA47 - AGENCIA CHAVETAZO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA48&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA48 - AGENCIA MILLENIUM</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA49&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA49 - AGENCIA LIZNAIRY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA50&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA50 - AGENCIA MILENA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA51&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA51 - AGENCIA PERUANO I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA52&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA52 - AGENCIA PERUANO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA53&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA53 - AGENCIA LA FAVORITA I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA54&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA54 - AGENCIA LA FAVORITA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA60&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA60 - AGENCIA EL TRIPLETAZO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA61&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA61 - AGENCIA LA NEGRA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA62&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA62 - AGENCIA RORAIMA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA63&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA63 - AGENCIA LA CATIRA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA64&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA64 - AGENCIA MALIET II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AA65&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AA65 - AGENCIA PEDRO SOLUCIONES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICINALII&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICINALII - ADICIONAL II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONAL&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONAL - ADICIONAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONALIII&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONALIII - ADICIONAL III </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONALIV&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONALIV - ADICIONAL IV </a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONALV&gr=AA01&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONALV - ADICIONAL V</a></span></li></ul></li><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=BA0001&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BA0001 | SIMON MATOS Y MEY</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BA01&gr=BA0001&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BA01 - EL POLLO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BA02&gr=BA0001&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BA02 - TAURUS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BA03&gr=BA0001&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BA03 - TIO RICO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BA05&gr=BA0001&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BA05 - LA PRIMAVERA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BA06&gr=BA0001&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BA06 - AG. LAS MARAVILLAS</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BA07&gr=BA0001&ven=BA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BA07 - CORDIALIDAD</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">CA001 | CARLOS ACEVEDO</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=ca002&ven=CA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ca002 | carlos acevedo</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0003&gr=ca002&ven=CA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0003 - AGENCIA SAN JOSECITO LA COLINA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0004&gr=ca002&ven=CA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0004 - AGENCIA PUEBLO NUEVO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=059&gr=ca002&ven=CA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">059 - ACEVEDO VISUALOTTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA02&gr=ca002&ven=CA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA02 - AGENCIA SAN JOSECITO </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA05&gr=ca002&ven=CA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA05 - AGENCIA PLAZA BOLIVAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA06&gr=ca002&ven=CA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA06 - AGENCIA PLAZA BOLIVAR II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA07&gr=ca002&ven=CA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA07 - AGENCIA LEINA</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=ca002&ven=CA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">CE01 | CESAR ACEVEDO</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CE001 | CESAR ACEVEDO</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=125&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">125 - MARISOL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=401&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">401 - SARAHY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=402&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">402 - EL HOYO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=403&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">403 - AG PEÃ‘ITA CENTRO 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=404&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">404 - AGENCIA SAN DIEGO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=405&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">405 - R15</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=406&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">406 - PEÃ‘ITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=407&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">407 - LINDA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=408&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">408 - CDI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=409&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">409 - RUBIO CDI </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=410&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">410 - DONCHEO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=411&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">411 - SAN MIGUEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=412&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">412 - GLADYS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=413&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">413 - CRISANGUEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=414&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">414 - SARKEY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=415&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">415 - AG. SANTO ATOCHE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=416&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">416 - YOSSER</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=417&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">417 - YAQUIMARI I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=418&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">418 - YAQUINIMARI II </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREOCESAR&gr=CE001&ven=CE01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREOCESAR - MONITOREO CESAR</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">CO000 | MARISELA</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=CO001&ven=CO000&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CO001 | MARISELA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CO01&gr=CO001&ven=CO000&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CO01 - MARISELA III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CO02&gr=CO001&ven=CO000&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CO02 - MARISELA</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CO03&gr=CO001&ven=CO000&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CO03 - MARISELA II</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">ED001 | EDGAR</a></span><ul style="display: none;"><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED001 | EDGAR</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=072&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">072 - AGENCIA LA PASARELA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=097&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">097 - AGENCIA CASTILLO DE LA SUERTE II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED02&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED02 - AGENCIA LA QUIRACHA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED07&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED07 - AGENCIA EVERTH</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED08&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED08 - AGENCIA VILLADA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED10&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED10 - AGENCIA EL GEMELO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED13&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED13 - AGENCIA LOS ANGELES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED15&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED15 - SAN ANTONIO "E"</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED16&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED16 - AGENCIA LOTERIA DANNY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED17&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED17 - AGENCIA LOS ANGELITOS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED20&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED20 - AGENCIA JULIO CARRILLO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED21&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED21 - AGENCIA LA PALMITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED22&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED22 - AGENCIA TATO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED23&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED23 - ALI III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED24&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED24 - AGENCIA  ALI PRINCIPAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED25&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED25 - AGENCIA  EL PRADO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED26&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED26 - AGENCIA  WALTER</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED27&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED27 - AGENCIA  WILEIMY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED28&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED28 - AGENCIA  ALI II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED29&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED29 - AGENCIA  ALBANY PRINCIPAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED32&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED32 - AGENCIA  EL GEMELO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED35&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED35 - AGENCIA  CAROLINA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED37&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED37 - AGENCIA  GUAYCAIPURO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED38&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED38 - DISPONIBLE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED39&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED39 - AGENCIA  NEBIJ</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED40&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED40 - AGENCIA  GENESIS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED43&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED43 - AGENCIA  CHEPA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED44&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED44 - AGENCIA  MI NIÃ‘A</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED45&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED45 - VARIEDADES  GESKA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED48&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED48 - AGENCIA  GEMELO III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED50&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED50 - DISPONIBLE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED51&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED51 - DISPONIBLE</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONI01&gr=ED001&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONI01 - EDGAR</a></span></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=EDLI&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">EDLI | LILIANA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED09&gr=EDLI&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED09 - AGENCIA LILANA PRINCIPAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED14&gr=EDLI&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED14 - AGENCIA LILIANA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED19&gr=EDLI&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED19 - AGENCIA LILIANA V</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED47&gr=EDLI&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED47 - AGENCIA  LILIANA III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED49&gr=EDLI&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED49 - AGENCIA  LILIANA IV</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED52&gr=EDLI&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED52 - AGENCIA  LILIANA VI</a></span></li></ul></li><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=EDNE&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">EDNE | NELLY</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED11&gr=EDNE&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED11 - AGENCIA NELLY V</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED30&gr=EDNE&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED30 - AGENCIA  NELLY UNO MANGO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED31&gr=EDNE&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED31 - AGENCIA  NELLY MANGO 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED33&gr=EDNE&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED33 - AGENCIA  NELLY III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED34&gr=EDNE&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED34 - AGENCIA  NELLY PRINCIPAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED36&gr=EDNE&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED36 - AGENCIA  NELLY IV</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED41&gr=EDNE&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED41 - AGENCIA  NELLY VI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED42&gr=EDNE&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED42 - AGENCIA  NELLY VII</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED46&gr=EDNE&ven=ED001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED46 - AGENCIA  NELLY VIII</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">ESLEY01 | AIDE</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=AIDE01&ven=ESLEY01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AIDE01 | AIDE</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=015&gr=AIDE01&ven=ESLEY01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">015 - AGENCIA AIDE II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=066&gr=AIDE01&ven=ESLEY01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">066 - AGENCIA AIDE III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=151&gr=AIDE01&ven=ESLEY01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">151 - AGENCIA AIDE</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=181&gr=AIDE01&ven=ESLEY01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">181 - AGENCIA AIDE IV</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">FA001 | FARAON(ALBINO)</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA01 | FARAON</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=501&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">501 - VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=502&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">502 - VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=503&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">503 - VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=504&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">504 - LAZARO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=505&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">505 - VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=506&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">506 - VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=507&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">507 - LA TRAMPITA, VISUALOTTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=508&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">508 - VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONAL&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONAL - ADICIONAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI08&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI08 - AG. BOROTA RICHARD</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA01&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA01 - FA01</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA02&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA02 - LLANADA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA03&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA03 - AGENCIA LA FORTALEZA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA04&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA04 - AGENCIA KELLY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA05&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA05 - AGENCIA COROMOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA06&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA06 - AGENCIA AURZAN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA07&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA07 - AGENCIA VICTORIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA08&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA08 - SAN LAZARO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA09&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA09 - AGENCIA MARIA ALEJANDRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA10&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA10 - AGENCIA LA TRAMPITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA11&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA11 - AGENCIA VEN GANA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fa12&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fa12 - AGENCIA LA PERLA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA13&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA13 - AGENCIA FARAON PRINCIPAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA14&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA14 - SUCURSAL II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA15&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA15 - BELLAVISTA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA16&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA16 - AGROPECUARIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA17&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA17 - AGENCIA MICHELENA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FA18&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FA18 - AGENCIA LA 15</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PERSONAL&gr=FA01&ven=FA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PERSONAL - PERSONAL</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">FP001 | FREDDY CONTRERAS </a></span><ul style="display: none;"><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP01 | FREDDY CONTRERAS</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADI01&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADI01 - ADICIONAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP01&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP01 - AGENCIA PUERTO VIVAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp04&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp04 - monica</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp05&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp05 - el milagro</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp09&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp09 - AGENCIA Mi Jagual de Barinas </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP11&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP11 - BARINAS I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp16&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp16 - EL GENIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp17&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp17 - PAOLA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp20&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp20 - AGENCIA FAVIOLA PROPIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP26&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP26 - Kiosco Principal B </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp29&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp29 - barinas III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp30&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp30 - Genio Azul II </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP31&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP31 - 24 DE JUNIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP38&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP38 - AGENCIA PIRAMIDE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP41&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP41 - LIBERTADOR  </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP42&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP42 - AG. EL PIÃ‘AL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP43&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP43 - AG. PIÃ‘AL 1</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP44&gr=FP01&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP44 - AG PIÃ‘AL II</a></span></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP02 | DORAIMA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONAL&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONAL - ADICIONAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP07&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP07 - TREBOL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP12&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP12 - MKM</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP13&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP13 - MARY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP15&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP15 - LA REINA DE LA SUERTE </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP19&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP19 - AGENCIA MI ANGEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP21&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP21 - LA MORITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP22&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP22 - GERBANNY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP28&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP28 - LAS TRES HERMANAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP32&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP32 - MI ANGEL II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP33&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP33 - NAHIKATY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP34&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP34 - LA MARACUCHA</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP40&gr=FP02&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP40 - AGENCIA 19 DE ABRIL</a></span></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=FP07&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP07 | FREDDY CONTRERAS</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP02&gr=FP07&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP02 - LA CANDELARIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP03&gr=FP07&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP03 - CONTRERAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP06&gr=FP07&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP06 - LA GATICA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP08&gr=FP07&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP08 - AGENCIA EL PROGRESO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP14&gr=FP07&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP14 - INVERSIONES OSMARY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp18&gr=FP07&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp18 - DIEGO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp36&gr=FP07&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp36 - Inversiones Anyalta </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP37&gr=FP07&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP37 - AGENCIA LAS 3MMM</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp39&gr=FP07&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp39 - inv. carla</a></span></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=LF00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">LF00 | LOS FORTUNAZOS</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP23&gr=LF00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP23 - FORTUNAZO I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP24&gr=LF00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP24 - FORTUNAZO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP25&gr=LF00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP25 - FORTUNAZO III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP27&gr=LF00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP27 - FORTUNAZO IV</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP35&gr=LF00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP35 - FORTUNAZO VI</a></span></li></ul></li><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=MAD00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MAD00 | MADIEL</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp09&gr=MAD00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp09 - AGENCIA Mi Jagual de Barinas </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP10&gr=MAD00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP10 - BARINAS  LAS CASITAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=fp29&gr=MAD00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">fp29 - barinas III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP31&gr=MAD00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP31 - 24 DE JUNIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=FP41&gr=MAD00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FP41 - LIBERTADOR  </a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=MAD00&ven=FP001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MADIEL</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">GUST01 | GUSTAVO ARDILA</a></span><ul style="display: none;"><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=FRO00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">FRO00 | FRANCISCO</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU19&gr=FRO00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU19 - AGENCIA  SILVA LA GRITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU23&gr=FRO00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU23 - SAN CONO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU25&gr=FRO00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU25 - AGENCIA  R.R</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU27&gr=FRO00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU27 - AGENCIA  GEREMY</a></span></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GUST01 | GUSTAVO ARDILA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=087&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">087 - AGENCIA OSCAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADI01&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADI01 - ADICIONAL GUSTAVO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU01&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU01 - AGENCIA KIOSKO ZULAY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU02&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU02 - AGENCIA MARACUCHO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU03&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU03 - AGENCIA IZARRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU04&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU04 - AGENCIA KIOSKO 7 </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU05&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU05 - AGENCIA NEOMAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU07&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU07 - AGENCIA HORACIO III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU08&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU08 - AGENCIA JENNY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU09&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU09 - AGENCIA PLAZA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU10&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU10 - AGENCIA MONTILLA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU11&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU11 - AGENCIA MILAGRO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU13&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU13 - AGENCIA GIOVANNY 71</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU15&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU15 - AGENCIA EL 70 II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU16&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU16 - AGENCIA ZAIDA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU17&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU17 - AGENCIA FREYKER</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU18&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU18 - AGENCIA CARMEN LA FRIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU20&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU20 - AGENCIA EL MILAGRO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU22&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU22 - AGENCIA MIS DOS ANGELES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU23&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU23 - SAN CONO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU24&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU24 - AGENCIA EL MARACUCHO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU26&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU26 - AGENCIA LUCILA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU28&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU28 - AGENCIA MARIBEL EL GUAYABO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU29&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU29 - AGENCIA LAGUNA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU30&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU30 - AGENCIA JUANA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU31&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU31 - AGENCIA EL GUAYANES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU32&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU32 - AGENCIA LA PIRAMIDE BELKIS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU33&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU33 - AGENCIA HUMBERTICO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU34&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU34 - AGENCIA. NUMAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU35&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU35 - AGENCIA LUSAN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU36&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU36 - AGENCIA CAROLINA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU37&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU37 - AGENCIA RAMONA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU38&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU38 - AGENCIA NANCY LA FRIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU39&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU39 - AGENCIA MARIBEL EL GUAYABO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU40&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU40 - DISPONIBLE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU41&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU41 - AGENCIA ANTONIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU43&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU43 - AGENCIA HORACIO 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU44&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU44 - AGENCIA GUAYABO 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU45&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU45 - AGENCIA NORAIMA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU46&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU46 - AGENCIA CASTULO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU47&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU47 - AGENCIA  ROMER GUT</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU48&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU48 - AGENCIA CACHACO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU49&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU49 - AGENCIA VITZAMAR II </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU52&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU52 - AGENCIA YURI EL GUAYABO </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU53&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU53 - AGENCIA LA BEBA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU54&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU54 - AGENCIA LA EXCELENCIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU55&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU55 - AGENCIA MI SUERTE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU57&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU57 - AGENCIA KARINA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU58&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU58 - AGENCIA  GRACIELA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU60&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU60 - AGENCIA  GIOVANNY EL 71 II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU61&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU61 - AGENCIA MILEIDY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU62&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU62 - AGENCIA LA LAGUNA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU63&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU63 - AGENCIA JESUS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU64&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU64 - GUSTAVO I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU65&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU65 - GUSTAVO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU66&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU66 - GUSTAVO III</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=GUST01&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li></ul></li><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">JRY00 | JHENRY </a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU06&gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU06 - AGENCIA JOHELYNG </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU12&gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU12 - AGENCIA LA MORITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU14&gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU14 - AGENCIA  MAYERLIN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU21&gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU21 - AGENCIA SIMON RODRIGUEZ II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU42&gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU42 - AGENCIA LA TRINITARIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU50&gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU50 - AGENCIA  DON SANTIAGO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU51&gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU51 - AGENCIA  SIMON RODRIGUEZ I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU56&gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU56 - AGENCIA LA BURUKIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=GU59&gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">GU59 - AGENCIA LA TENDIDA</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=JRY00&ven=GUST01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">JORG001 | JORGUE PAPA</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=JOR001&ven=JORG001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">JOR001 | JORGUE </a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PI03&gr=JOR001&ven=JORG001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PI03 - CENTRO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PI04&gr=JOR001&ven=JORG001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PI04 - RUBIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PI04&gr=JOR001&ven=JORG001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PI04 - FLOR </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PI08&gr=JOR001&ven=JORG001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PI08 - ANTONI I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PI09&gr=JOR001&ven=JORG001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PI09 - ELVA SANTA ANA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PI10&gr=JOR001&ven=JORG001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PI10 - ANTONY II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PI11&gr=JOR001&ven=JORG001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PI11 - ELBA SANTA ANA</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PI12&gr=JOR001&ven=JORG001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PI12 - ELVA SANTA ANA II</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">KR | KEDDY</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR001 | KEDDY</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=064&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">064 - AG SANTICIMA TRINIDAD</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR01&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR01 - AG YURI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR02&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR02 - AG KR02</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR03&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR03 - AG FANNY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR04&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR04 - AG SIMON CRIOLLO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR05&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR05 - AG KR05</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=kr06&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">kr06 - AG JAVIER</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR07&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR07 - AG NANCY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR08&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR08 - AG LILY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR09&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR09 - AG MARIA Y JESUS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR10&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR10 - AG KEYLA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR11&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR11 - AG A&amp;E II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR12&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR12 - AG A&amp;E I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR13&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR13 - AG YANETH</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR14&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR14 - AG CENTRO CINCO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR15&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR15 - AG IT</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR16&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR16 - AG RIBERAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR17&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR17 - AG IT II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR18&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR18 - AG A&amp;E III GPRS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR19&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR19 - AG JOSE DAVID</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=kr20&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">kr20 - AG SANDRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR21&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR21 - AG KIOSKO LA  PARADA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR22&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR22 - AG MILAGROS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR23&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR23 - AG CENTRO DE APUESTAS LAS VEGAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR24&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR24 - AG EL RINCON DE LA SUERTE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR25&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR25 - AG FABIOLA 062</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=KR26&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">KR26 - AG JESSPATTY</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=KR001&ven=KR&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">LU001 | LUZ MARINA</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">LUZ001 | LUZ MARINA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0004&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0004 - AGENCIA PARADA SAN ANTONIO FISCAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0005&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0005 - AGENCIA PEQUEÃ‘OS COMERCIANTES FISCAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0006&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0006 - AGENCIA ESQUINA PARADA SAN ANTONIO VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=001&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">001 - esquina terminal</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=002&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">002 - metropolis</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=003&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">003 - LA GRAN BOTIJA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=004&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">004 - PARADA DE SAN ANTONIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=005&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">005 - PEQUEÃ‘OS COMERCIANTES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=006&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">006 - ESQUINA PARADA DE SAN ANTONIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=093&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">093 - AGENCIA GINA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=112&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">112 - MICHELENA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=194&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">194 - BOTIJA EL CENTRO</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=195&gr=LUZ001&ven=LU001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">195 - botija terminal </a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">MA01 | MARIELA</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=MA01&ven=MA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MA01 | MARIELA ERMITA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=091&gr=MA01&ven=MA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">091 - AGENCIA LA ERMITA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=091VISUALOTO&gr=MA01&ven=MA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">091VISUALOTO - AGENCIA LA ERMITA VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=092&gr=MA01&ven=MA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">092 - ERMITA II</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=092VISUALOTO&gr=MA01&ven=MA01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">092VISUALOTO - LA ERMITA II VISUALOTO</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">MI01 | WILMER CARACAS</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=MI01&ven=MI01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MI01 | MI SUERTE</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=138&gr=MI01&ven=MI01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">138 - MI SUERTE I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=142&gr=MI01&ven=MI01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">142 - MI SUERTE II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=225&gr=MI01&ven=MI01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">225 - MI SUERTE III</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=226&gr=MI01&ven=MI01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">226 - MI SUERTE IV</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">MO001 | MARISOL</a></span><ul style="display: none;"><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=MA06&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MA06 | MARISOL</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ED06&gr=MA06&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ED06 - AG. PALMAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M004&gr=MA06&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M004 - AGENCIA MARIOL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MO02&gr=MA06&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MO02 - VEGA DE AZA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MO03&gr=MA06&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MO03 - AGENCIA EL COROZO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=MA06&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=XXX&gr=MA06&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">XXX - CCC</a></span></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=MA08&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MA08 | MARISOL</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=195&gr=MA08&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">195 - AGENCIA CARLOS III</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M002&gr=MA08&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M002 - ANA</a></span></li></ul></li><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=MO07&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MO07 | MARISOL</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MO01&gr=MO07&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MO01 - PATRON</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MO03&gr=MO07&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MO03 - COROZO</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MO05&gr=MO07&ven=MO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MO05 - MO05</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">MT01 | MARTHA</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MT001 | MARTHA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0011&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0011 - AGENCIA  EL CENTRO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0012&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0012 - AG NUBIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0013&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0013 -  AG LIBERTADOR </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0014&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0014 - AG SUCRE PARTE BAJA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0015&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0015 - AG GENARO MENDEZ</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0016&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0016 - AG BARRIO LIBERTADOR </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0017&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0017 - AGENCIA PIRINEOS II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0019&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0019 - AG BARRIO EL CARMEN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0020&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0020 - AGENCIA BARRIO OBRERO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0023&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0023 - AG EL TERMINAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=0025&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0025 - AGENCIA LOTERIAS NATALY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=088&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">088 - AG BARRIO EL CARMEN 088</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=DISPONIBLE&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">DISPONIBLE - ADICIONAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MT01&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MT01 - AGENCIA MICHELENA I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MT02&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MT02 - AGENCIA MICHELENA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MT26&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MT26 - AG LOTERIA DON BOSCO</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MT27&gr=MT001&ven=MT01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MT27 - AG ASDRID</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">MZ01 | MERCEDEZ</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=MZ001&ven=MZ01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MZ001 | MERCEDEZ</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=125&gr=MZ001&ven=MZ01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">125 - AGENCIA MARISOL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=401&gr=MZ001&ven=MZ01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">401 - AGENCIA SARAHY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=402&gr=MZ001&ven=MZ01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">402 - AGENCIA EL HOYO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=403&gr=MZ001&ven=MZ01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">403 - AGENCIA PEÃ‘ITA CENTRO I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=404&gr=MZ001&ven=MZ01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">404 - AGENCIA SAN DIEGO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=408&gr=MZ001&ven=MZ01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">408 - AGENCIA VALENTINA</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=414&gr=MZ001&ven=MZ01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">414 - AGENCIA SARKEY</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">NU01 | NUBIA</a></span><ul style="display: none;"><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=AD&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AD | ADICIONAL</a></span> <ul id="folder21" style="display: none;"><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AD&gr=AD&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AD - CUALQUIERA</a></span></li></ul></li><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=NU001&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NU001 | NUBIA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NU02&gr=NU001&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NU02 - AG NUBIA I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NU03&gr=NU001&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NU03 - AG NUBIA PRINCIPAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NU05&gr=NU001&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NU05 - AG NUBIA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NU06&gr=NU001&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NU06 - AG PERACAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NU08&gr=NU001&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NU08 - AG NUBIA V</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NU09&gr=NU001&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NU09 - AG. EL PORTAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NU10&gr=NU001&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NU10 - AG EL PORTAL II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NU11&gr=NU001&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NU11 - AG MARCOS</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NU12&gr=NU001&ven=NU01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NU12 - AG EL PORTAL III</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">PQ001 | PIQUICA </a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ00 | PIQUICA 01</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ01&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ01 - KIOSKO MI SUERTE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ02&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ02 - RIBERAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ03&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ03 - PALACIOS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ04&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ04 - KIOSKO MARY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ05&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ05 - LOTERÃAS PABLO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ06&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ06 - KIOSKO ZENAIDA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ07&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ07 - PIRULINO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ09&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ09 - LOTERIAS RUBEN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ11&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ11 - COBRE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ12&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ12 - LOTERIAS PIKI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ13&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ13 - LOTERIAS YIYA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ14&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ14 - BOCA DE GRITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ15&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ15 - CANGURITO </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ17&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ17 - LOTERIAS PIROLINO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ18&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ18 - LOTERIAS ZENAIDA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ19&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ19 - LOTERIAS MORENO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ20&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ20 - LOTERIAS LEONARDO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ21&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ21 - PIRULINO 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ23&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ23 - EL SAMAN </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ24&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ24 - AGENCIA MARISOL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ25&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ25 - OLGA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ26&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ26 - AG. CARLOS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ27&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ27 - QUINTERO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ28&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ28 - BLANCA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ29&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ29 - GLORIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ30&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ30 - MILENIUM</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ31&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ31 - YANDRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PQ32&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PQ32 - PUPILO</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB06&gr=PQ00&ven=PQ001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB06 - LOS MOROCHOS</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">PR00 | PIRAMIDE</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=PR001&ven=PR00&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PR001 | PIRAMIDE</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=049&gr=PR001&ven=PR00&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">049 - HERMES VISUALOTTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PR02&gr=PR001&ven=PR00&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PR02 - AGENCIA EN LINEA JA3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PR03&gr=PR001&ven=PR00&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PR03 - SISTEMA EN LINEA JJ1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PR04&gr=PR001&ven=PR00&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PR04 - AGENCIA DE LOTERIAS JJ04</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PR05&gr=PR001&ven=PR00&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PR05 - LINARES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PR06&gr=PR001&ven=PR00&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PR06 - AGENCIA DE LOTERIAS VI06</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PR07&gr=PR001&ven=PR00&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PR07 - AGENCIA DE LOTERIAS VI07</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PR08&gr=PR001&ven=PR00&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PR08 - ALEC JJ8</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PR09&gr=PR001&ven=PR00&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PR09 - SISTEMA EN LINEA JGUERRERO</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">RO01 | ROBIN</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO01 | ROBIN</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=068&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">068 - LUIS FERNANDO GUERRERO VISUAL LOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=301&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">301 - JOSMIR 301</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI01&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI01 - AG. MIREYA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI02&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI02 - AG. MOROCHO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI03&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI03 - AG. PALMIRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI04&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI04 - KARIN SOCOPO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI05&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI05 - NEL CARLOS 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI06&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI06 - NEL CARLOS 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI07&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI07 - NEL CARLOS 3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI10&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI10 - AG. MOROCHO 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI11&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI11 - AGENCIA ROBIN II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI12&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI12 - AG. MOROCHO 3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI13&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI13 - VERA CRUZ</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI14&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI14 - YOLANDA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=BI15&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">BI15 - ROBIN 3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO01&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO01 - MONITOREO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO14&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO14 - LA ENTRADA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO15&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO15 - RO15</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO16&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO16 - AG. JANETH</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO17&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO17 - JANETH2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO18&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO18 - ROBIN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO19&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO19 - BUEN PASTOR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO20&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO20 - ROBIN 4</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO21&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO21 - RO21</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO21VISUALLOTO&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO21VISUALLOTO - MILLONARIO 352</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO22&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO22 - TRIPLE.COM</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO24&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO24 - AG. JANETH 3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO25&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO25 - CAPACHO RO25</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO26&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO26 - ANA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RO27&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RO27 - GLORIA</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=VI09&gr=RO01&ven=RO01&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">VI09 - FORTUNA IX</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">SO001 | SOLEDAD</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO001 | SOLEDAD</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=119&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">119 - AGENCIA MAYELA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=121&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">121 - AGENCIA SOFI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=129&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">129 - AGENCIA DE LOTERIAS  ROCIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=130&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">130 - AG BRAYAN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO01&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO01 - AGENCIA AIMARA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO02&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO02 - AGENCIA DE LOTERIAS JHENNY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO03&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO03 - AGENCIA DE LOTERIAS ALEJANDRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO04&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO04 - AGENCIA JULIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO05&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO05 - AGENCIA GUARAUNO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO06&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO06 - AGENCIA EL PARAISO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO08&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO08 - AGENCIA SANTA MATHA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO09&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO09 - AGENCIA JHOSNEIDER</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO10&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO10 - AGENCIA  LA NEGRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO11&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO11 - AGENCIA PAULA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO12&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO12 - AGENCIA YESSIKA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO13&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO13 - AGENCIA MARIA ALEJANDRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO14&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO14 - AGENCIA SANTA TERRESA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO15&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO15 - AGENCIA SAN ANTONIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO16&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO16 - AGENCIA RADIKA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO17&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO17 - AGENCIA LA ESTACION</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO18&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO18 - AGENCIA LAS MINAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO19&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO19 - AGENCIA BARRIO OBRERO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SO20&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SO20 - AGENCIA YESSIKA II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y02&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y02 - AGENCIA GABI</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB26&gr=SO001&ven=SO001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB26 - AGENCIA EL CHACAL</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">TA001 | TAYNAR</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=TA0001&ven=TA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">TA0001 | TAYNAR</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=175&gr=TA0001&ven=TA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">175 - AGENCIA TAYNAR I </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=197&gr=TA0001&ven=TA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">197 - AGENCIA TAYNAR II</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=TA01&gr=TA0001&ven=TA001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">TA01 - TAYNAR III</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">WI001 | WILMER</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI001 | WILMER</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=007&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">007 - AG. LOTERIA 007 GN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONAL&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONAL - ADICIONAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI01&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI01 - PRIMERO DE MAYO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI02&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI02 - LA AVENIDA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI03&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI03 - DON JORGUE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI04&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI04 - AG. LOTERIA 004Z</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI05&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI05 - AG. ISABEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI06&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI06 - AGENCIA DE LOTERIA 006 YU2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI08&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI08 - LOTO08JORG</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI09&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI09 - AG. LOTERIA NEYLA2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI10&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI10 - 5 DE JULIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI11&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI11 - YESIBEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI12&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI12 - MARACANDRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI13&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI13 - PARADA PERACAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI14&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI14 - ADUANA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI15&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI15 - LILIANA CEMENTERIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI16&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI16 - AGENCIA AN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI17&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI17 - AGENCIA XJUEGOS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI18&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI18 - AGENCIA EL CEMENTERIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI19&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI19 - AGENCIA PERACAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI20&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI20 - PUNTO DE SUERTE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI21&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI21 - BERNAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI22&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI22 - AGENCIA SALLIK</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=WI23&gr=WI001&ven=WI001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">WI23 - PINTO SALINA</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">Y001 | YORMAN</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y01 | YORMAN</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONI01&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONI01 - yorman monitoreo</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y01&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y01 - AGENCIA  EL EXITO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y02&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y02 - FLOR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y03&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y03 - AG LA DUQUESA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y04&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y04 - AG TONY &amp; YET</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y05&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y05 - AG LA TURISTA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y06&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y06 - AG LA POSADA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y07&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y07 - AG JAIRMORU</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y08&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y08 - AG DEY-K</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y09&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y09 - YORMAN  PPAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y10&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y10 - AG LA AUYAMALA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y11&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y11 - AG NEYL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y12&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y12 - AG INVERSIONES LIZ</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y13&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y13 - LA CURVA</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=Y14&gr=Y01&ven=Y001&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">Y14 - AG EL SUERTAZO</a></span></li></ul></li></ul></li><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">zerb | zenaida</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZERB 01 | ZENAIDA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=060&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">060 - AG. SANTA RITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=067&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">067 - AG. GUILLO I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=089&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">089 - SISTEMA EN LINEA ZERB II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONAL&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONAL - MAQUINA DE REPUESTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB01&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB01 - MAGUITO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB02&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB02 - FAILAN </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB03&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB03 - KIOSKO TERMINAL VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB04&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB04 - OLGA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB05&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB05 - RIFAS DEL GIRASOL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB07&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB07 - PROGRESO 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB08&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB08 - BALVER</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB09&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB09 - ISABEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB10&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB10 - GUILLO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB12&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB12 - KIOSKO EL PROGRESO </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB13&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB13 - OSMIR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB14&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB14 - SANTO CRISTO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB15&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB15 - SANTO CRISTO III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB16&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB16 - FLOR DE LAS MESAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB17&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB17 - BARRIL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB18&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB18 - DOREIDA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB19&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB19 - ARRECIFE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB21&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB21 - SANTO CRISTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB22&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB22 - ARECIFE II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB23&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB23 - AGENCIA SISTEMA ZER III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB24&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB24 - AG. AGUSTIN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB25&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB25 - AG. LA CUATRO</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ZB27&gr=ZERB 01&ven=zerb&ban=1', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ZB27 - AG. BALVER</a></span></li></ul></li></ul></li></ul></li><li class="expandable lastExpandable"><div class="hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="banca"><a href="#" style="text-decoration: none;" class="">202 | Sol Naciente</a></span><ul style="display: none;"><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">0001 | FON</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0001 | FON</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=001&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">001 - ARELLANO PC</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=005&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">005 - AG. BARRIO OBRERO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=008&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">008 - J.A COLON</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=009&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">009 - TREBOL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=011&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">011 - LA BANCA LA GUACARA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=012&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">012 - AG. SAN JOSECITO </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=016&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">016 - JHOANNA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=017&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">017 - 3 ESQUINAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=018&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">018 - DILANGEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=019&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">019 - AG. JENIBETH</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=020&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">020 - AG. MARISELA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=022&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">022 - MICHELENA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=023&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">023 - LOTERIA AZUL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=024&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">024 - AG. DANIEL KIOSCOS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=026&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">026 - AG EL NIÃ‘O DE LA SUERTE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=027&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">027 - CAROLINA SANTA ANA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=028&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">028 - la laja</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=029&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">029 - jeferson</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=031&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">031 - MARINA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=032&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">032 - AG GREGORIO EL VALLE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=037&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">037 - EL TIGRE II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=050&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">050 - AG. CANTON 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=053&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">053 - ag. jhony</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=055&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">055 - ARGENIS II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=058&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">058 - MICHELENA MAYRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=059&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">059 - EMMAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=062&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">062 - ag. torbes</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=077&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">077 - CEFORA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=080&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">080 - CANTON 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=084&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">084 - DARCY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=085&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">085 - KIOSKO YOLANDA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=117&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">117 - MARLY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=134&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">134 - AGENCIA EFREN RUBIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=154&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">154 - BARANCAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=158&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">158 - CAPACHO LIBERTADOR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=173&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">173 - AG. CATERIN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=174&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">174 - VALERA PC</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=193&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">193 - ingrid concordia</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=195&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">195 - botija terminal </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=202&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">202 - ANITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=203&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">203 - ANTONI III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=204&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">204 - AG. NANCY TERMINAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=205&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">205 - DAISY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=208&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">208 - TU TREBOL DE LA SUERTE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=209&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">209 - TREEBOL II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=210&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">210 - AG. LA FRIA ISSIMAR </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=211&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">211 - AG. PALO GORDO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=213&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">213 - DISPONIBLE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=217&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">217 - CANEYES JOSE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=226&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">226 - BELLA VISTA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=228&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">228 - AGENCIA YAIRE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=240&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">240 - JOSE PALMIRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=245&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">245 - BOCONO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=345&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">345 - AG. ROXANNA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=347&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">347 - ag. rosana </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AR22&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AR22 - ZULAY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M06&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M06 - AGENCIA MILANYELA III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M11&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M11 - AGENCIA 011</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M19&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M19 - JOCH</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M21&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M21 - PSICOSIS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M22&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M22 - ARELLANO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M23&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M23 - AGENCIA LUCKY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M32&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M32 - ARGENIS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M43&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M43 - NENUCO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M50&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M50 - KIOSKO VALERA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M54&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M54 - EL VALLE 3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M55&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M55 - BETTY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR007&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR007 - AGENCIA ESTEFANIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RU01&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RU01 - JAJO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RU02&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RU02 - EXITO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=RU03&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">RU03 - WILMARI II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=TUTRÃ‰BOL-01&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">TUTRÃ‰BOL-01 - PARLEY  I</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=TUTREBOL-02&gr=0001&ven=0001&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">TUTREBOL-02 - PARLEY II</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">0002 | HUMBERTO MARTINEZ</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">0002 | HUMBERTO</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=010&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">010 - GENCIA MILENA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=179&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">179 - ANDREINA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=180&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">180 - AG EL EXITO CORDERO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=181&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">181 - ALEJANDRO LOBATERA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=183&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">183 - BARRIO OBRERO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=184&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">184 - AGENCIA FAVIOLA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=194&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">194 - AGENCIA ELIANA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=200&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">200 - AG. MICHELENA HUMBERTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=214&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">214 - AGENCIA LA ESTRATEGIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=257&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">257 - AGENCIA BILLY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=261&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">261 - LOTERIAS H </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=278&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">278 - AG. COLON</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=279&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">279 - LA NENA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=305&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">305 - AG ALEJANDRO LOBATERA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=307&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">307 - LIDER II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=HU01&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">HU01 - MI JESUS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M59&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M59 - AGENCIA BERTA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M61&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M61 - LA FLOR</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M65&gr=0002&ven=0002&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M65 - LIDER DE LAS LOTERIAS </a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">0011 | ELORZA JAIMES</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=orza01&ven=0011&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">orza01 | ELORZA JAIMES</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=227&gr=orza01&ven=0011&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">227 - AGENCIA PROSPERIDAD I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=230&gr=orza01&ven=0011&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">230 - AGENCIA EL INDEPENDIENTE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=231&gr=orza01&ven=0011&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">231 - AGENCIA PROSPERIDAD III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=246&gr=orza01&ven=0011&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">246 - AGENCIA MILENA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=JA02&gr=orza01&ven=0011&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">JA02 - AGENCIA PROSPERIDAD II</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M109&gr=orza01&ven=0011&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M109 - AGENCIA MAQUINA PROSPERIDAD</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">AL01 | ALFONSO</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL001 | ALFONSO</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=003&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">003 - CABAÃ‘AS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=004&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">004 - NIKITAUN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=007&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">007 - AGENCIA APUESTAS BARRIO OBRERO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=021&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">021 - CEMENTERIO I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=042&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">042 - BARRIO SUCRE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=074&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">074 - ESCRUPULOS CAPACHO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=097&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">097 - ESCRUPULO CARRERA 23</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=101&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">101 - ESCRUPULOS 16</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=103&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">103 - ESCRUPULOS TERMINAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=107&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">107 - 23 DE ENERO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=215&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">215 - ESCRUPULOS ERMITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=220&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">220 - LAS PULGAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=222&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">222 - LA FRIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=223&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">223 - BARRIO OBRERO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=234&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">234 - CEMENTERIO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=238&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">238 - PASAJE ACUADUCTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=239&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">239 - AGENCIA BARRANCAS </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL39&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL39 - AG. ISABEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL40&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL40 - HERMONCA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL41&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL41 - EL PUNTO|</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL42&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL42 - MECO I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL43&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL43 - LA BLANCA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL44&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL44 - SAN ANTONIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL45&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL45 - YORLTT</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL46&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL46 - LEONEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL47&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL47 - YANIRETH</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL48&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL48 - COLON II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL49&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL49 - SIN LIMETE 3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL50&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL50 - AGENCIA LOURDES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL51&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL51 - PATIECITO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL52&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL52 - SARA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL53&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL53 - AG. YUDI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL54&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL54 - SAN ANTONIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL55&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL55 - ALBERTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL56&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL56 - ZAID</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL57&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL57 - DIOSA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL58&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL58 - GENARO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL59&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL59 - JULIO SAN ANTONIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL60&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL60 - AGENCIA DE LOTERIAS ALEX</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL61&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL61 - ALEXANDER</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL62&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL62 - MECO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=AL64&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">AL64 - AGENCIA MECO VI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=L03&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">L03 - PALMIRA</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR003&gr=AL001&ven=AL01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR003 - YESIKA </a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">CT00 | CARLOS TRUJILLO</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CT001 | CARLOS TRUJILLO</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=195&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">195 - AGENCIA CARLOS III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=219&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">219 - AGENCIA CARLOS IV</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=225&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">225 - AGENCIA CARLOS II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=270&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">270 - AGENCIA CARLOS I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=283&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">283 - AGENCIA CENTRO DE APUESTAS ALEJANDRA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=286&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">286 - AGENCIA CENTRO DE APUESTAS CHEJENDE II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=314&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">314 - AGENCIA  CENTRO DE APUESTAS LA PELI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONAL&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONAL - ADICIONAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA01&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA01 - AGENCIA CARLOS V</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA02&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA02 - AGENCIA CARLOS VI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA03&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA03 - AGENCIA CENTRO DE APUESTAS LA VICIOSA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA04&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA04 - AGENCIA CENTRO DE APUESTAS J.I.L</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA05&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA05 - AGENCIA CENTRO DE APUESTAS MICHAEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA06&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA06 - AGENCIA CENTRO DE APUESTAS LOS CARDONES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA07&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA07 - AGENCIA  CARLOS VII</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA08&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA08 - AGENCIA CARLOS VIII</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA09&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA09 - AGENCIA CARLOS IX</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=CA10&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">CA10 - SABANA GRANDE </a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONIT&gr=CT001&ven=CT00&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONIT - MONITOREO CARLOS T</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">JM01 | JAIMEZ MATURIN </a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=JM01&ven=JM01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">JM01 | JAIMEZ</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=ADICIONAL&gr=JM01&ven=JM01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ADICIONAL - ADICIONAL MATURIN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=JM01&gr=JM01&ven=JM01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">JM01 - MIS TRES HIJAS UNO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=JM02&gr=JM01&ven=JM01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">JM02 - MIS TRES HIJAS DOS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=JM03&gr=JM01&ven=JM01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">JM03 - MIS TRES HIJAS TRES</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=JM04&gr=JM01&ven=JM01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">JM04 - MIS TRES HIJAS CUATRO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=JM05&gr=JM01&ven=JM01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">JM05 - LOS MANGOS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=JM06&gr=JM01&ven=JM01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">JM06 - MONITOREO JAIME </a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=PARLEY&gr=JM01&ven=JM01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">PARLEY - PARLEY MIS HIJAS UNO</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">LOO2  | ORLANDO MARQUEZ L002</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OM001 | ORLANDO MARQUEZ</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=074&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">074 - MOLINO 074 VISUALOTO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=178&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">178 - AGENCIA MARLON</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=199&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">199 - AGENCIA BELKIS KIOSCO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=280&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">280 - AGENCIA EL PALMAR ALFREDO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M16&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M16 - AGENCIA LA FLACA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M45&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M45 - AGENCIA SAM</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M84&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M84 - AGENCIA MAQUINA MOLINO </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR001&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR001 - AGENCIA DIMAR PRINCIPAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR002&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR002 - AGENCIA COLORADO CARMEN</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR005&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR005 - AGENCIA DIMO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR006&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR006 - AGENCIA ELYCAR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR008&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR008 - AGENCIA EL MOLINO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR16&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR16 - AGENCIA TRES ESQUINAS </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR17&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR17 - AGENCIA ROSA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR22&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR22 - AGENCIA ALEXANDRA IRIS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR27&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR27 - AGENCIA EN EL SOL NUEVA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR28&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR28 - AGENCIA LA CALIDAD</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR30&gr=OM001&ven=LOO2 &ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR30 - AGENCIA KARINA</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">ORPI01 | ORALDO PINEDA</a></span><ul style="display: none;"><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=OR&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR | NELSON COLONCITO</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=OR&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - AG MONITOREO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NEL01&gr=OR&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NEL01 - ZONA 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NEL02&gr=OR&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NEL02 - ZONA 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NEL03&gr=OR&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NEL03 - ZONA3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NEL04&gr=OR&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NEL04 - ZONA 4</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NEL05&gr=OR&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NEL05 - ZONA 5</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=NEL06&gr=OR&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">NEL06 - ZONA 6</a></span></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ORCOL01 | CHEO COLON</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=185&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">185 - AGENCIA BARRIO OBRERO FISCAL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR009&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR009 - AGENCIA COLON IX</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR01&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR01 - COLON I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR02&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR02 - COLON II </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR03&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR03 - AGENCIA  COLON III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR04&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR04 - COLON IV</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR05&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR05 - COLON V</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR06&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR06 - COLON VI</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR07&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR07 - AGENCIA  COLON VII</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR08&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR08 - COLON VIII</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR11&gr=ORCOL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR11 - CHELA </a></span></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=ORL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ORL01 | ORALDO PINEDA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=185&gr=ORL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">185 - BARRIO OBRERO </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=186&gr=ORL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">186 - AGENCIA GUILLO V</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=188&gr=ORL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">188 - AGENCIA  GUILLO 3</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=192&gr=ORL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">192 - AGENCIA  AGENCIA GUILLO III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M03&gr=ORL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M03 - AGENCIA VARIEDADES MILENIUM</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M04&gr=ORL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M04 - AGENCIA   LA PIRAMIDE </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M56&gr=ORL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M56 - AGENCIA DE LOTERIAS PULPITO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M68&gr=ORL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M68 - AGENCIA  YALILE</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M77&gr=ORL01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M77 - AGENCIA  LEONARDO</a></span></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=ORMIL&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ORMIL | ORALDO</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR09&gr=ORMIL&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR09 - AGENCIA  AMINTA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR10&gr=ORMIL&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR10 - AGENCIA MIL 50</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=OR12&gr=ORMIL&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">OR12 - AGENCIA  TARIBA</a></span></li></ul></li><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SAB01 | SABANA MENDOZA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=187&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">187 - gran murachi</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=196&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">196 - EL TERMINAL MENDOZA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=206&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">206 - AGENCIA LA GRAN MURACHI G PARADA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=207&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">207 - AGENCIA  LA GRAN MURACHI MENDOZA V</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=251&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">251 - MINA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=299&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">299 - AGENCIA LA GRAN MURACHI PASARELA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=338&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">338 - AGENCIA LA GRAN MURACHI VIII</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=339&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">339 - gran murachi</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=342&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">342 - AGENCIA LA MURACHI ALTAGRACIA </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=343&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">343 - GRAN MURACHI III </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=344&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">344 - GRAN MURACHI DIVIDE III</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M31&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M31 - AGENCIA  MURACHI CERRO LIBRE 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M51&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M51 - AGENCIA LOTERIAS EL BATATILLO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M52&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M52 - AGENCIA LA GRAN MURACHI MOVIL 4</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M62&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M62 - AGENCIA LA GRAN MURACHI MOVIL 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M63&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M63 - AGENCIA LA GRAN MURACHI MOVIL 7</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M64&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M64 - AGENCIA LA MURACHI "LA VICIOSA"</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M67&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M67 - AGENCIA LA GRAN MURACHI MENDOZA IV</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M73&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M73 - AGENCIA LA MURACHI MOVIL X</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M75&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M75 - AGENCIA LA GRAN MURACHI MOVIL LA PISTA</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=M76&gr=SAB01&ven=ORPI01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">M76 - DISPONIBLE</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">ORZ01 |  ELORZA JAIMEZ</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=orza01&ven=ORZ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">orza01 | ELORZA JAIMES</a></span> <ul id="folder21" style="display: none;"><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=246&gr=orza01&ven=ORZ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">246 - milena</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">ROJ01 | ROGER MARQUEZ</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">ROJ01 | ROGER MARQUEZ</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=182&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">182 - EL GANADOR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=190&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">190 - PODERIO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=212&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">212 - SOL NACIENTE I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=350&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">350 - CHURURU</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=351&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">351 - BUHO DE LA SUERTE</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=352&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">352 - naranjales</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=353&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">353 - EL MILAGRO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=354&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">354 - GUADUALITO I</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=355&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">355 - AG. GUASDUALITO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=356&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">356 - PORVENIR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=357&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">357 - SAN JUAQUIN </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=358&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">358 - PALMARITO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=359&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">359 - SANTA RITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=360&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">360 - VICTORIA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=361&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">361 - TRIPLE SEGURO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=362&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">362 - COLORADAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=363&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">363 - GUADUALITO 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=364&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">364 - JENNIFER LOS CORRALES </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=365&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">365 - AGENCIA SOL NACIENTE 2</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=366&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">366 - KILOMETRO 22</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=367&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">367 - AGENCIA LA TRINIDAD </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=368&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">368 - AG PUERTO NUEVO</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=ROJ01&ven=ROJ01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li></ul></li></ul></li><li class="closed expandable"><div class="hitarea closed-hitarea expandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">SE01 | OFELIA</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE01 | OFELIA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=MONITOREO&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">MONITOREO - MONITOREO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE01&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE01 - SEBORUCO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE02&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE02 - GRITA 1</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE03&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE03 - SILVA GRITA</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=se04&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">se04 - mopris </a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=se05&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">se05 - catatimbo</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE06&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE06 - SAN CONO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE07&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE07 - MARIANGUEL</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE08&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE08 - CHATO</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE09&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE09 - GEOVANY</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE10&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE10 - CATATUMBO II</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE11&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE11 - ARIAS</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE12&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE12 - MI SUERTE</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=SE13&gr=SE01&ven=SE01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">SE13 - AG ANTOKER</a></span></li></ul></li></ul></li><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="receptor"><a href="#" title="Cargar contenido" style="
    text-decoration: none;
">TA01 | TAMARA</a></span><ul style="display: none;"><li class="closed expandable lastExpandable"><div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea "></div><span class="group"><a href="javascript:Carga('computadordetalle.php?gr=TA01&ven=TA01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">TA01 | TAMARA</a></span> <ul id="folder21" style="display: none;"><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=015&gr=TA01&ven=TA01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">015 - TAMARA LIBERTADOR</a></span></li><li class="closed"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=038&gr=TA01&ven=TA01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">038 - EL CARMEN</a></span></li><li class="closed last"><span class="agencia"><a href="javascript:Carga('computadordetalle.php?age=118&gr=TA01&ven=TA01&ban=202', 'car');" title="Cargar contenido" style="
    text-decoration: none;
">118 - UNIDAD VECINAL</a></span></li></ul></li></ul></li></ul></li></ul>-->

<script type="text/javascript">
    $(function() {
        $("#browser").treeview({	
            persist: "location",
            collapsed: true,
            unique: true
        });
    })
</script>
