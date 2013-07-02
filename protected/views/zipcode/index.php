<?php
/* @var $this ZipcodeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Zipcodes',
);

$this->menu=array(
	array('label'=>'Create Zipcode', 'url'=>array('create')),
	array('label'=>'Manage Zipcode', 'url'=>array('admin')),
);
?>

<h1>Zipcodes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
