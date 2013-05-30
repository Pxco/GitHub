<?php
$this->breadcrumbs=array(
	'Empleadoses'=>array('index'),
	$model->noempleado=>array('view','id'=>$model->noempleado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empleados','url'=>array('index')),
	array('label'=>'Create Empleados','url'=>array('create')),
	array('label'=>'View Empleados','url'=>array('view','id'=>$model->noempleado)),
	array('label'=>'Manage Empleados','url'=>array('admin')),
);
?>

<h1>Update Empleados <?php echo $model->noempleado; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>