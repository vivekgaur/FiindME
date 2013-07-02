<?php
/* @var $this UserAnalyticController */
/* @var $model UserAnalytic */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deal_id_fk'); ?>
		<?php echo $form->textField($model,'deal_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_clicked'); ?>
		<?php echo $form->textField($model,'user_clicked'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_interested'); ?>
		<?php echo $form->textField($model,'user_interested'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_shared'); ?>
		<?php echo $form->textField($model,'user_shared'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_looking'); ?>
		<?php echo $form->textField($model,'user_looking'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_in_zipcode'); ?>
		<?php echo $form->textField($model,'user_in_zipcode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->