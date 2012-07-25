<?php
$this->breadcrumbs=array(
	'Estoque'=>array('index'),
	'Inserir Item',
);

$this->menu=array(
	array('label'=>'Lista de Estoque', 'url'=>array('admin')),
);
?>

<h1>Create Estoque</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>