<?php
$this->breadcrumbs=array(
	'Lista de Usuários',
);

$this->menu=array(
	array('label'=>'Criar Usuários', 'url'=>array('create')),
	array('label'=>'Administrar Usuários', 'url'=>array('admin')),
);
?>

<h1>Lista de Usuários</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
