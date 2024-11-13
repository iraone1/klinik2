<?php
/* @var $this PeranController */
/* @var $model Peran */

$this->breadcrumbs=array(
	'Perans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Peran', 'url'=>array('index')),
	array('label'=>'Manage Peran', 'url'=>array('admin')),
);
?>

<h1>Create Peran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>