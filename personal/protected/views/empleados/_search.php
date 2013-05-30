<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'noempleado',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'apaterno',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'amaterno',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'perfil_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'genero',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'edad',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecnac',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'correo',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'fecregistro',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'jefe_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
