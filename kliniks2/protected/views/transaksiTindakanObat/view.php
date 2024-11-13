<?php
/* @var $this TransaksiTindakanObatController */
/* @var $model TransaksiTindakanObat */

$this->breadcrumbs=array(
	'Transaksi Tindakan Obats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TransaksiTindakanObat', 'url'=>array('index')),
	array('label'=>'Create TransaksiTindakanObat', 'url'=>array('create')),
	array('label'=>'Update TransaksiTindakanObat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TransaksiTindakanObat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransaksiTindakanObat', 'url'=>array('admin')),
);
?>

<h1>View TransaksiTindakanObat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_pasien',
		'id_tindakan',
		'id_obat',
		'id_pegawai',
		'tanggal_tindakan',
	),
)); ?>
