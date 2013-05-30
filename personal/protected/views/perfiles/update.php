<?php
$this->breadcrumbs=array(
	'Perfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perfiles','url'=>array('index')),
	array('label'=>'Create Perfiles','url'=>array('create')),
	array('label'=>'View Perfiles','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Perfiles','url'=>array('admin')),
);
?>

<h1>Update Perfiles <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>