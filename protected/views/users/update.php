<?php
$this->breadcrumbs=array(
	'Lista de Usuários'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Alterar Dados',
);

$this->menu=array(
	array('label'=>'Lista de Usuários', 'url'=>array('index')),
	array('label'=>'Criar Usuários', 'url'=>array('create')),
);
?>

<h1>Alterar Dados do Usuário ID:<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>