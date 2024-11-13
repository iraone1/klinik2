<?php
/* @var $this PembayaranTagihanController */
/* @var $model PembayaranTagihan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pembayaran-tagihan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pasien'); ?>
		<?php echo $form->textField($model,'id_pasien'); ?>
		<?php echo $form->error($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_pembayaran'); ?>
		<?php echo $form->textField($model,'tanggal_pembayaran'); ?>
		<?php echo $form->error($model,'tanggal_pembayaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dibayar_oleh'); ?>
		<?php echo $form->textField($model,'dibayar_oleh'); ?>
		<?php echo $form->error($model,'dibayar_oleh'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->