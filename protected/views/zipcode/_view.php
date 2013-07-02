<?php
/* @var $this ZipcodeController */
/* @var $data Zipcode */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('zipcode_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->zipcode_id), array('view', 'id'=>$data->zipcode_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip_code')); ?>:</b>
	<?php echo CHtml::encode($data->zip_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->city_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->state_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />


</div>