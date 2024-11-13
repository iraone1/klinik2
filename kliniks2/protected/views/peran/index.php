<?php
/* @var $this PeranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perans',
);

$this->menu=array(
	array('label'=>'Create Peran', 'url'=>array('create')),
	array('label'=>'Manage Peran', 'url'=>array('admin')),
);
?>

<h1>Perans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
