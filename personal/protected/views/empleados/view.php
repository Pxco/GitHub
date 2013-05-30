<?php
$this->breadcrumbs=array(
	'Empleadoses'=>array('index'),
	$model->noempleado,
);

$this->menu=array(
	array('label'=>'List Empleados','url'=>array('index')),
	array('label'=>'Create Empleados','url'=>array('create')),
	array('label'=>'Update Empleados','url'=>array('update','id'=>$model->noempleado)),
	array('label'=>'Delete Empleados','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->noempleado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empleados','url'=>array('admin')),
);
?>

<h1>View Empleados #<?php echo $model->noempleado; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'noempleado',
		'nombre',
		'apaterno',
		'amaterno',
		'perfil.nombre',
		'genero',
		'edad',
		'fecnac',
		'correo',
		'fecregistro',
		'jefe.nombre',
	),
)); ?>
