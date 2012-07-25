<?php
$this->breadcrumbs=array(
	'Lista de Usuários'=>array('index'),
	'Criar Usuários',
);

$this->menu=array(
	array('label'=>'Voltar para Usuários', 'url'=>array('index')),
);

?>

<h1>Criar Usuários</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>