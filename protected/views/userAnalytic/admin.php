<?php
/* @var $this UserAnalyticController */
/* @var $model UserAnalytic */

$this->breadcrumbs=array(
	'User Analytics'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UserAnalytic', 'url'=>array('index')),
	array('label'=>'Create UserAnalytic', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-analytic-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage User Analytics</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-analytic-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'deal_id_fk',
		'user_clicked',
		'user_interested',
		'user_shared',
		'user_looking',
		/*
		'user_in_zipcode',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
