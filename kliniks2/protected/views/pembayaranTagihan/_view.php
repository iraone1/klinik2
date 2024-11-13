<?php
/* @var $this PembayaranTagihanController */
/* @var $data PembayaranTagihan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_pembayaran')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_pembayaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dibayar_oleh')); ?>:</b>
	<?php echo CHtml::encode($data->dibayar_oleh); ?>
	<br />


</div>