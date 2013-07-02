<?php
/* @var $this ZipcodeController */
/* @var $model Zipcode */

$this->breadcrumbs=array(
	'Zipcodes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Zipcode', 'url'=>array('index')),
	array('label'=>'Manage Zipcode', 'url'=>array('admin')),
);
?>

<h1>Create Zipcode</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>