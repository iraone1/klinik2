<?php
/* @var $this TransaksiTindakanObatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksi Tindakan Obats',
);

$this->menu=array(
	array('label'=>'Create TransaksiTindakanObat', 'url'=>array('create')),
	array('label'=>'Manage TransaksiTindakanObat', 'url'=>array('admin')),
);
?>

<h1>Transaksi Tindakan Obats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
