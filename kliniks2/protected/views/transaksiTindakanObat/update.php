<?php
/* @var $this TransaksiTindakanObatController */
/* @var $model TransaksiTindakanObat */

$this->breadcrumbs=array(
	'Transaksi Tindakan Obats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TransaksiTindakanObat', 'url'=>array('index')),
	array('label'=>'Create TransaksiTindakanObat', 'url'=>array('create')),
	array('label'=>'View TransaksiTindakanObat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TransaksiTindakanObat', 'url'=>array('admin')),
);
?>

<h1>Update TransaksiTindakanObat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>