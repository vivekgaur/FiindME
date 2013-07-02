<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'middle_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_id_fk'); ?>
		<?php echo $form->textField($model,'address_id_fk'); ?>
		<?php echo $form->error($model,'address_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_phone_id_fk'); ?>
		<?php echo $form->textField($model,'contact_phone_id_fk'); ?>
		<?php echo $form->error($model,'contact_phone_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cell_phone_id_fk'); ?>
		<?php echo $form->textField($model,'cell_phone_id_fk'); ?>
		<?php echo $form->error($model,'cell_phone_id_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->