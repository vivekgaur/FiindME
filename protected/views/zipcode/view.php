<?php
/* @var $this ZipcodeController */
/* @var $model Zipcode */

$this->breadcrumbs=array(
	'Zipcodes'=>array('index'),
	$model->zipcode_id,
);

$this->menu=array(
	array('label'=>'List Zipcode', 'url'=>array('index')),
	array('label'=>'Create Zipcode', 'url'=>array('create')),
	array('label'=>'Update Zipcode', 'url'=>array('update', 'id'=>$model->zipcode_id)),
	array('label'=>'Delete Zipcode', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->zipcode_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Zipcode', 'url'=>array('admin')),
);
?>

<h1>View Zipcode #<?php echo $model->zipcode_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'zipcode_id',
		'zip_code',
		'city_id_fk',
		'state_id_fk',
		'latitude',
		'longitude',
	),
)); ?>
