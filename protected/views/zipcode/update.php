<?php
/* @var $this ZipcodeController */
/* @var $model Zipcode */

$this->breadcrumbs=array(
	'Zipcodes'=>array('index'),
	$model->zipcode_id=>array('view','id'=>$model->zipcode_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Zipcode', 'url'=>array('index')),
	array('label'=>'Create Zipcode', 'url'=>array('create')),
	array('label'=>'View Zipcode', 'url'=>array('view', 'id'=>$model->zipcode_id)),
	array('label'=>'Manage Zipcode', 'url'=>array('admin')),
);
?>

<h1>Update Zipcode <?php echo $model->zipcode_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>