<?php
/* @var $this UserAnalyticController */
/* @var $data UserAnalytic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deal_id_fk')); ?>:</b>
	<?php echo CHtml::encode($data->deal_id_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_clicked')); ?>:</b>
	<?php echo CHtml::encode($data->user_clicked); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_interested')); ?>:</b>
	<?php echo CHtml::encode($data->user_interested); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_shared')); ?>:</b>
	<?php echo CHtml::encode($data->user_shared); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_looking')); ?>:</b>
	<?php echo CHtml::encode($data->user_looking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_in_zipcode')); ?>:</b>
	<?php echo CHtml::encode($data->user_in_zipcode); ?>
	<br />


</div>