<?php
/* @var $this UserAnalyticController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Analytics',
);

$this->menu=array(
	array('label'=>'Create UserAnalytic', 'url'=>array('create')),
	array('label'=>'Manage UserAnalytic', 'url'=>array('admin')),
);
?>

<h1>User Analytics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
