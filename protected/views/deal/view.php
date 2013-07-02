<?php
/* @var $this DealController */
/* @var $model Deal */

$this->breadcrumbs=array(
	'Deals'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Deal', 'url'=>array('index')),
	array('label'=>'Create Deal', 'url'=>array('create')),
	array('label'=>'Update Deal', 'url'=>array('update', 'id'=>$model->deal_id)),
	array('label'=>'Delete Deal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->deal_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Deal', 'url'=>array('admin')),
);
?>

<h1>View Deal #<?php echo $model->deal_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'deal_id',
		'merchant_id_fk',
		'title',
		'description',
		'create_time',
		'last_update',
		'start_time',
		'end_time',
		'quantity',
		'status',
		'discount',
		'user_analytics_id_fk',
	),
)); ?>
