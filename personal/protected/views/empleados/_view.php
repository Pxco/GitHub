<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('noempleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->noempleado),array('view','id'=>$data->noempleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apaterno')); ?>:</b>
	<?php echo CHtml::encode($data->apaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amaterno')); ?>:</b>
	<?php echo CHtml::encode($data->amaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perfil_id')); ?>:</b>
	<?php echo CHtml::encode($data->perfil->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($data->edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecnac')); ?>:</b>
	<?php echo CHtml::encode($data->fecnac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecregistro')); ?>:</b>
	<?php echo CHtml::encode($data->fecregistro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jefe_id')); ?>:</b>
	<?php echo CHtml::encode($data->jefe->nombre); ?>
	<br />
	<br />

</div>