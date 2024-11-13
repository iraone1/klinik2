<?php
/* @var $this PembayaranTagihanController */
/* @var $model PembayaranTagihan */

$this->breadcrumbs=array(
	'Pembayaran Tagihans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PembayaranTagihan', 'url'=>array('index')),
	array('label'=>'Create PembayaranTagihan', 'url'=>array('create')),
	array('label'=>'Update PembayaranTagihan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PembayaranTagihan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PembayaranTagihan', 'url'=>array('admin')),
);
?>

<h1>View PembayaranTagihan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_pasien',
		'jumlah',
		'tanggal_pembayaran',
		'dibayar_oleh',
	),
)); ?>
