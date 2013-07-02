<?php
/* @var $this AddressController */
/* @var $data Address */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->address_id), array('view', 'id'=>$data->address_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
	<?php echo CHtml::encode($data->company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_line_1')); ?>:</b>
	<?php echo CHtml::encode($data->address_line_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_line_2')); ?>:</b>
	<?php echo CHtml::encode($data->address_line_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->city_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->state_id_fk); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('zip_code_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->zip_code_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->country_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	*/ ?>

</div>