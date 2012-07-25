<?php
$this->breadcrumbs=array(
	'Estoque'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'Lista de Estoque', 'url'=>array('admin')),
	array('label'=>'Inserir Item', 'url'=>array('create')),
	array('label'=>'Alterar Item', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Exluir Item', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja excluir?')),
);
?>

<h1>Item de ID: #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'id_categoria',
		'codigo',
		'quantidade',
	),
)); ?>
