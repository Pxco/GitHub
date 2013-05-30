<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'empleados-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'noempleado',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'apaterno',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'amaterno',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->dropDownListRow($model,'perfil_id',CHtml::listData(Perfiles::model()->findAll(), 'id', 'nombre'), array('empty'=>'--Seleccione--')); ?>

	<?php echo $form->dropDownListRow($model,'genero',array('empty'=>'--Seleccione--','M'=>'Masculino','F'=>'Femenino')); ?>

	<?php echo $form->textFieldRow($model,'edad',array('class'=>'span5')); ?>

	<?php
	echo $form->labelEx($model,'fecnac');
	$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		'attribute'=>'fecnac',
		'model'=>$model,
		'language'=>'es',
		// additional javascript options for the date picker plugin
		'options'=>array(
			'dateFormat'=>'yy-mm-dd',
	  	'showAnim'=>'show',
	  	'changeMonth'=>'true',
	  	'changeYear'=>'true',
	  	'showWeek'=>'true',
		),
		'htmlOptions'=>array(
        'style'=>'height:20px;'
    ),
	));  
	?>

	<?php echo $form->textFieldRow($model,'correo',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'fecregistro',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'jefe_id',CHtml::listData(Empleados::model()->findAll(), 'noempleado', 'nombre'), array('empty'=>'--Seleccione--')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
