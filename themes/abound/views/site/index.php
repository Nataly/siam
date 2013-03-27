<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 

if(Yii::app()->user->isGuest)
{
?>
<script language="JavaScript" type="text/javascript">
    document.location.href='../siam/site/login.html';
</script>
<?
}else {
?>
<script language="JavaScript" type="text/javascript">
    document.location.href='../siam/site/page.html?view=graphs';
</script>
<? } ?>
