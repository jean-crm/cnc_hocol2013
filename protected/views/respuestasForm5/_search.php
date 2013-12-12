<?php
/* @var $this RespuestasForm5Controller */
/* @var $model RespuestasForm5 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'id_con'); ?>
		<?php echo $form->textField($model,'id_con'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'nom_contacto'); ?>
		<?php echo $form->textField($model,'nom_contacto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_servicio'); ?>
		<?php echo $form->textField($model,'id_servicio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'servicio'); ?>
		<?php echo $form->textField($model,'servicio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'fecha_encuesta'); ?>
		<?php echo $form->textField($model,'fecha_encuesta'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pA01'); ?>
		<?php echo $form->textField($model,'pA01',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pA02'); ?>
		<?php echo $form->textField($model,'pA02',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pA03'); ?>
		<?php echo $form->textArea($model,'pA03',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'PA04'); ?>
		<?php echo $form->textField($model,'PA04',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pB01'); ?>
		<?php echo $form->textField($model,'pB01',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pB02'); ?>
		<?php echo $form->textField($model,'pB02',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pB03'); ?>
		<?php echo $form->textField($model,'pB03',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pB04'); ?>
		<?php echo $form->textField($model,'pB04',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pB05'); ?>
		<?php echo $form->textField($model,'pB05',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pB06'); ?>
		<?php echo $form->textField($model,'pB06',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'p01'); ?>
		<?php echo $form->textField($model,'p01',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pC01'); ?>
		<?php echo $form->textField($model,'pC01',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'Pc01_a'); ?>
		<?php echo $form->textField($model,'Pc01_a',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pD01'); ?>
		<?php echo $form->textArea($model,'pD01',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pD02'); ?>
		<?php echo $form->textArea($model,'pD02',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'pD03'); ?>
		<?php echo $form->textArea($model,'pD03',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="control-group">
		<?php echo CHtml::submitButton('Buscar', array('class' => 'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->