<?php
/* @var $this TransactionController */
/* @var $model Transactions */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Transactions', 'url'=>array('index')),
	array('label'=>'Create Transactions', 'url'=>array('create')),
	array('label'=>'Update Transactions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Transactions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transactions', 'url'=>array('admin')),
);
?>

<h1>View Transactions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'transaction_date',
		'entry_time',
		'transaction_type',
		'amount',
		'reciept_no',
		'status',
	),
)); ?>
