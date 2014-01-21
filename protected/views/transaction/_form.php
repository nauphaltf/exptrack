<?php
/* @var $this TransactionController */
/* @var $model Transactions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transactions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>145)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_date'); ?>
		<?php echo $form->textField($model,'transaction_date'); ?>
		<?php echo $form->error($model,'transaction_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entry_time'); ?>
		<?php echo $form->textField($model,'entry_time'); ?>
		<?php echo $form->error($model,'entry_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_type'); ?>
		<?php echo $form->textField($model,'transaction_type',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'transaction_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reciept_no'); ?>
		<?php echo $form->textField($model,'reciept_no',array('size'=>60,'maxlength'=>145)); ?>
		<?php echo $form->error($model,'reciept_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->