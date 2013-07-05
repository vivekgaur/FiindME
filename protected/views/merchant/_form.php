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
		<?php echo $form->labelEx($model,'category_id_fk'); ?>
	<?php echo $form->dropDownList($model,'category_id_fk', CHtml::listData(Category::model()->findAll(array('order' => 'Name')),'category_id','Name'));?>
	<?/*php echo $form->textField($model,'category_id_fk'); */?>
		<?php echo $form->error($model,'category_id_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->