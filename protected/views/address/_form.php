<?php
/* @var $this AddressController */
/* @var $model Address */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'address-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_line_1'); ?>
		<?php echo $form->textField($model,'address_line_1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address_line_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_line_2'); ?>
		<?php echo $form->textField($model,'address_line_2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address_line_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_id_fk'); ?>
		<?php echo $form->textField($model,'city_id_fk'); ?>
		<?php echo $form->error($model,'city_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state_id_fk'); ?>
		<?php echo $form->dropDownList($model,'state_id_fk', CHtml::listData(State::model()->findAll(array('order' => 'name')),'state_id','name'));?>
		<?php echo $form->error($model,'state_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip_code_id_fk'); ?>
		<?php echo $form->textField($model,'zip_code_id_fk'); ?>
		<?php echo $form->error($model,'zip_code_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_id_fk'); ?>
	<?/*php echo $form->textField($model,'country_id_fk'); */?>
	<?php echo $form->dropDownList($model,'country_id_fk', CHtml::listData(Country::model()->findAll(array('order' => 'name')),'country_id','name'));?>
		<?php echo $form->error($model,'country_id_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->