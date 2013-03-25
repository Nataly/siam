<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';

?>
<div class="page-header">
    <h1>Bienvenido <small>El sistema SIAM te espera</small></h1>
</div>
<div class="row-fluid">

    <div class="span6 offset3">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => "Iniciar sesion",
        ));
        ?>



<?php if(Yii::app()->user->hasFlash('error')): ?>
 
<div class="alert alert-error">
    <?php echo Yii::app()->user->getFlash('error'); ?>
</div>
 
<?php endif; ?>

        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                    ));
            ?>


            <div class="row">
                <?php echo $form->labelEx($model, 'Usuario'); ?>
                <?php echo $form->textField($model, 'username'); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'Contraseña'); ?>
                <?php echo $form->passwordField($model, 'password'); ?>
                <?php echo $form->error($model, 'password'); ?>

            </div>

            <div class="row rememberMe">
                <?php echo $form->checkBox($model, 'rememberMe'); ?>
                <?php echo $form->label($model, 'rememberMe'); ?>
                <?php echo $form->error($model, 'rememberMe'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton('Entrar', array('class' => 'btn btn btn-primary')); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->

        <?php $this->endWidget(); ?>

    </div>

</div>