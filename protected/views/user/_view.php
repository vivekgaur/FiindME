<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->contact_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deals_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->deals_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('default_zipcode_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->default_zipcode_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />


</div>