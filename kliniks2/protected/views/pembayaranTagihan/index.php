<?php
/* @var $this PembayaranTagihanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pembayaran Tagihans',
);

$this->menu=array(
	array('label'=>'Create PembayaranTagihan', 'url'=>array('create')),
	array('label'=>'Manage PembayaranTagihan', 'url'=>array('admin')),
);
?>

<h1>Pembayaran Tagihans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
