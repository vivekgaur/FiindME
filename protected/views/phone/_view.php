<?php
/* @var $this PhoneController */
/* @var $data Phone */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->phone_id), array('view', 'id'=>$data->phone_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_code')); ?>:</b>
	<?php echo CHtml::encode($data->country_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_code')); ?>:</b>
	<?php echo CHtml::encode($data->area_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php echo CHtml::encode($data->number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extn')); ?>:</b>
	<?php echo CHtml::encode($data->extn); ?>
	<br />


</div>