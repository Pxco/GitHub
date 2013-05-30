<?php
$this->breadcrumbs=array(
	'Perfiles',
);

$this->menu=array(
	array('label'=>'Create Perfiles','url'=>array('create')),
	array('label'=>'Manage Perfiles','url'=>array('admin')),
);
?>

<h1>Perfiles</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
