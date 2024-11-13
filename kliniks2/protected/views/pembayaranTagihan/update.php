<?php
/* @var $this PembayaranTagihanController */
/* @var $model PembayaranTagihan */

$this->breadcrumbs=array(
	'Pembayaran Tagihans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PembayaranTagihan', 'url'=>array('index')),
	array('label'=>'Create PembayaranTagihan', 'url'=>array('create')),
	array('label'=>'View PembayaranTagihan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PembayaranTagihan', 'url'=>array('admin')),
);
?>

<h1>Update PembayaranTagihan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>