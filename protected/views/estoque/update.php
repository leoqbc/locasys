<?php
$this->breadcrumbs=array(
	'Estoque'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Alterar Item',
);

$this->menu=array(
        array('label'=>'Lista de Estoque', 'url'=>array('admin')),
	array('label'=>'Inserir Item', 'url'=>array('create')),
	array('label'=>'Visualizar Item', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Alterar Item id: <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>