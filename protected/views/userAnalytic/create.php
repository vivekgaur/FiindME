<?php
/* @var $this UserAnalyticController */
/* @var $model UserAnalytic */

$this->breadcrumbs=array(
	'User Analytics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserAnalytic', 'url'=>array('index')),
	array('label'=>'Manage UserAnalytic', 'url'=>array('admin')),
);
?>

<h1>Create UserAnalytic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>