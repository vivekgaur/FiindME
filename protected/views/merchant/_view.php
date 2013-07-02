<?php
/* @var $this MerchantController */
/* @var $data Merchant */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->merchant_id), array('view', 'id'=>$data->merchant_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->contact_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deals_list_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->deals_list_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->category_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_analytics_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->user_analytics_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />


</div>