<?php
$this->breadcrumbs=array(
	'Eventoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Eventos', 'url'=>array('index')),
);
?>

<h1>Create Eventos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>