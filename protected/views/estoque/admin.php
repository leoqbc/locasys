<?php

$dataProvider = $model->search();

$dataProvider->setPagination(
    array(
        'pageSize'=>20
    )
);

$this->breadcrumbs=array(
	'Estoque'=>array('index'),
	'Itens',
);

$this->menu=array(
	array('label'=>'Inserir Item', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('estoque-grid', {
		data: $(this).serialize()
	});
	return false;
});

");
?>

<h1>Itens do Estoque</h1>

<p>
É possivel usar os operadores: (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) nos campos da busca para filtrar ex: "> 5" no campo quantidade pegará produtos maiores que 5.
</p>
<?php echo CHtml::link('Busca avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estoque-grid',
	'dataProvider'=>$dataProvider,
	'filter'=>$model,
	'columns'=>array(
		array(
                    'name'=>'id',
                    'htmlOptions'=>array('width'=>'60'),
                ),
		array(
                    'name'=>'descricao',
                    'htmlOptions'=>array('width'=>'200'),
                ),
		'id_categoria',
		'codigo',
		'quantidade',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
