<?php
/* @var $this MerchantController */
/* @var $model Merchant */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'merchant-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_id_fk'); ?>
		<?php echo $form->textField($model,'contact_id_fk'); ?>
		<?php echo $form->error($model,'contact_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deals_list_id_fk'); ?>
		<?php echo $form->textField($model,'deals_list_id_fk'); ?>
		<?php echo $form->error($model,'deals_list_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id_fk'); ?>
		<?php echo $form->textField($model,'category_id_fk'); ?>
		<?php echo $form->error($model,'category_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_analytics_id_fk'); ?>
		<?php echo $form->textField($model,'user_analytics_id_fk'); ?>
		<?php echo $form->error($model,'user_analytics_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->