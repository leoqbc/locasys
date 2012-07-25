<?php
$this->breadcrumbs=array(
	'Estoques',
);

$this->menu=array(
	array('label'=>'Create Estoque', 'url'=>array('create')),
	array('label'=>'Manage Estoque', 'url'=>array('admin')),
);
?>

<h1>Estoques</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
