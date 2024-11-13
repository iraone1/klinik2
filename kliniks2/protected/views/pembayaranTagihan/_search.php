<?php
/* @var $this PembayaranTagihanController */
/* @var $model PembayaranTagihan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pasien'); ?>
		<?php echo $form->textField($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_pembayaran'); ?>
		<?php echo $form->textField($model,'tanggal_pembayaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dibayar_oleh'); ?>
		<?php echo $form->textField($model,'dibayar_oleh'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->