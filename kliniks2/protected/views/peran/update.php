<?php
/* @var $this PeranController */
/* @var $model Peran */

$this->breadcrumbs=array(
	'Perans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Peran', 'url'=>array('index')),
	array('label'=>'Create Peran', 'url'=>array('create')),
	array('label'=>'View Peran', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Peran', 'url'=>array('admin')),
);
?>

<h1>Update Peran <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>