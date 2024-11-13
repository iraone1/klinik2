<?php
/* @var $this TransaksiTindakanObatController */
/* @var $model TransaksiTindakanObat */

$this->breadcrumbs=array(
	'Transaksi Tindakan Obats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransaksiTindakanObat', 'url'=>array('index')),
	array('label'=>'Manage TransaksiTindakanObat', 'url'=>array('admin')),
);
?>

<h1>Create TransaksiTindakanObat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>