<?php
/* @var $this DealController */
/* @var $data Deal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('deal_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->deal_id), array('view', 'id'=>$data->deal_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->merchantIdFk->contactIdFk->addressIdFk->company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
	<?php /* 
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />
	      */ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
	<?php echo CHtml::encode($data->start_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</b>
	<?php echo CHtml::encode($data->discount); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_analytics_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->user_analytics_id_fk); ?>
	<br />

	*/ ?>

</div>