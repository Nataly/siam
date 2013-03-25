<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Inicio';
/*$this->breadcrumbs=array(
	'Inicio',
); */
?>

<h1>Iniciar Sesión</h1>

<p>Por favor complete el siguiente formulario con sus datos de acceso:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos que lleven <span class="required">*</span> se requieren.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre de usuario'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contraseña'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Sugerencia: Se puede ingresar con <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
<?php if(Yii::app()->user->hasFlash('contact')): ?>
 
<div class="flash-success">
    <?php echo Yii::app()->user->getFlash('contact'); ?>
</div>
 
<?php endif; ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
