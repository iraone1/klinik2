<?php
/* @var $this PembayaranTagihanController */
/* @var $model PembayaranTagihan */

$this->breadcrumbs=array(
	'Pembayaran Tagihans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PembayaranTagihan', 'url'=>array('index')),
	array('label'=>'Manage PembayaranTagihan', 'url'=>array('admin')),
);
?>

<h1>Create PembayaranTagihan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>