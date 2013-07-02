<?php
/* @var $this PhoneController */
/* @var $model Phone */

$this->breadcrumbs=array(
	'Phones'=>array('index'),
	$model->phone_id,
);

$this->menu=array(
	array('label'=>'List Phone', 'url'=>array('index')),
	array('label'=>'Create Phone', 'url'=>array('create')),
	array('label'=>'Update Phone', 'url'=>array('update', 'id'=>$model->phone_id)),
	array('label'=>'Delete Phone', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->phone_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Phone', 'url'=>array('admin')),
);
?>

<h1>View Phone #<?php echo $model->phone_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'phone_id',
		'country_code',
		'area_code',
		'number',
		'extn',
	),
)); ?>
