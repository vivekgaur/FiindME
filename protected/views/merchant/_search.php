<?php
/* @var $this MerchantController */
/* @var $model Merchant */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'merchant_id'); ?>
		<?php echo $form->textField($model,'merchant_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_id_fk'); ?>
		<?php echo $form->textField($model,'contact_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deals_list_id_fk'); ?>
		<?php echo $form->textField($model,'deals_list_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_id_fk'); ?>
		<?php echo $form->textField($model,'category_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_analytics_id_fk'); ?>
		<?php echo $form->textField($model,'user_analytics_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->