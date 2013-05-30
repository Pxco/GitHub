<?php
$this->breadcrumbs=array(
	'Perfiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Perfiles','url'=>array('index')),
	array('label'=>'Create Perfiles','url'=>array('create')),
	array('label'=>'Update Perfiles','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Perfiles','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Perfiles','url'=>array('admin')),
);
?>

<h1>View Perfiles #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
	),
)); ?>
