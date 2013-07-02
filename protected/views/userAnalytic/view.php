<?php
/* @var $this UserAnalyticController */
/* @var $model UserAnalytic */

$this->breadcrumbs=array(
	'User Analytics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserAnalytic', 'url'=>array('index')),
	array('label'=>'Create UserAnalytic', 'url'=>array('create')),
	array('label'=>'Update UserAnalytic', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserAnalytic', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserAnalytic', 'url'=>array('admin')),
);
?>

<h1>View UserAnalytic #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'deal_id_fk',
		'user_clicked',
		'user_interested',
		'user_shared',
		'user_looking',
		'user_in_zipcode',
	),
)); ?>
