<?php
/* @var $this UserAnalyticController */
/* @var $model UserAnalytic */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-analytic-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'deal_id_fk'); ?>
		<?php echo $form->textField($model,'deal_id_fk'); ?>
		<?php echo $form->error($model,'deal_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_clicked'); ?>
		<?php echo $form->textField($model,'user_clicked'); ?>
		<?php echo $form->error($model,'user_clicked'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_interested'); ?>
		<?php echo $form->textField($model,'user_interested'); ?>
		<?php echo $form->error($model,'user_interested'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_shared'); ?>
		<?php echo $form->textField($model,'user_shared'); ?>
		<?php echo $form->error($model,'user_shared'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_looking'); ?>
		<?php echo $form->textField($model,'user_looking'); ?>
		<?php echo $form->error($model,'user_looking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_in_zipcode'); ?>
		<?php echo $form->textField($model,'user_in_zipcode'); ?>
		<?php echo $form->error($model,'user_in_zipcode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->