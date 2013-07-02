<?php
/* @var $this UserAnalyticController */
/* @var $model UserAnalytic */

$this->breadcrumbs=array(
	'User Analytics'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserAnalytic', 'url'=>array('index')),
	array('label'=>'Create UserAnalytic', 'url'=>array('create')),
	array('label'=>'View UserAnalytic', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserAnalytic', 'url'=>array('admin')),
);
?>

<h1>Update UserAnalytic <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>