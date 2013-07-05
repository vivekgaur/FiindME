<?php
/* @var $this DealController */
/* @var $model Deal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'deal-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'merchant_id_fk'); ?>
		<?php echo $form->textField($model,'merchant_id_fk'); ?>
		<?php echo $form->error($model,'merchant_id_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
      <?php echo $form->labelEx($model,'start_time'); ?>
	<?/*php 
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
        $this->widget('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker',array(
        'model'=>$model, //Model object
        'attribute'=>'start_time', //attribute name
	'mode'=>'datetime' //use "time","date" or "datetime" (default)
        'options'=>array() // jquery plugin options
	));
	  */?>
	<?php 
	$this->widget('application.extensions.timepicker.EJuiDateTimePicker',array(
										   'model'=>$model,
    'attribute'=>'start_time',
    'options'=>array(
        'hourGrid' => 4,
        'hourMin' => 9,
        'hourMax' => 22,
	'minuteGrid'=> 15,
        'timeFormat' => 'h:m',
        'changeMonth' => true,
        'changeYear' => false,
	'ampm'=>true,
	'timeFormat'=>'hh:mm tt',
        ),
    ));  
?>
	<?php echo $form->error($model,'start_time'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'end_time'); ?>
	<?/*php echo $form->textField($model,'end_time'); */?>
	<?php 
	$this->widget('application.extensions.timepicker.EJuiDateTimePicker',array(
										   'model'=>$model,
    'attribute'=>'end_time',
    'options'=>array(
        'hourGrid' => 4,
        'hourMin' => 9,
        'hourMax' => 22,
	'minuteGrid'=> 15,
        'timeFormat' => 'h:m',
        'changeMonth' => true,
        'changeYear' => false,
	'ampm'=>true,
	'timeFormat'=>'hh:mm tt',
        ),
    ));  
?>
	<?php echo $form->error($model,'end_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
	<?/*php echo $form->textField($model,'quantity'); */?>
	<?php echo $form->dropDownList($model,'quantity',array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5)) ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
	<?php echo $form->dropDownList($model,'discount',array('5'=>5,'10'=>10,'15'=>15,'20'=>20,'25'=>25)) ?>
	<?/*php echo $form->textField($model,'discount'); */?>
		<?php echo $form->error($model,'discount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->