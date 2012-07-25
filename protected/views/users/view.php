<?php
$this->breadcrumbs=array(
	'Lista de Usuários'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Usuários', 'url'=>array('index')),
	array('label'=>'Criar Usuário', 'url'=>array('create')),
	array('label'=>'Alterar Usuário', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Usuário', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Atenção: Tem certeza que deseja excluir este registro?')),
);
?>

<h1>Dados do Usuário id:<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'login',
		'senha',
		'acesso',
		array(
                    'label' =>'Permissão',
                    'name'  =>'idPermissao.nome'
                ),
	),
)); ?>
