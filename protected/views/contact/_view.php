<?php
/* @var $this ContactController */
/* @var $data Contact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->contact_id), array('view', 'id'=>$data->contact_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->middle_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->address_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_phone_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->contact_phone_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cell_phone_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->cell_phone_id_fk); ?>
	<br />


</div>