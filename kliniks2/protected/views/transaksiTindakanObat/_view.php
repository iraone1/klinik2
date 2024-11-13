<?php
/* @var $this TransaksiTindakanObatController */
/* @var $data TransaksiTindakanObat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tindakan')); ?>:</b>
	<?php echo CHtml::encode($data->id_tindakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::encode($data->id_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_tindakan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_tindakan); ?>
	<br />


</div>