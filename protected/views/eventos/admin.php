<?php
$this->breadcrumbs=array(
	'Eventos'=>array('index'),
);

$this->menu=array(
	array('label'=>'Criar Eventos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('eventos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Eventos</h1>

<p>
    Informações sobre os eventos: Consultar, Adicionar, Lançar Saídas e Lançar Retornos 
</p>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'eventos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'columns' => array(
            array(
                'name'=>'id',
                'htmlOptions'=>array('width'=>'30')
            ),
            array(
                'type'=>'raw',
                'name'=>'nome_evento',
                'value'=>'CHtml::link($data->nome_evento,array("../index.php/eventos/$data->id"))',
            ),
            array(
                'name'=>'data_inicio',
                'value'=>'date("d/m/Y H:i:s", strtotime($data->data_inicio))'
            ),
            array(
                'name'=>'data_fim',
                'value'=>'date("d/m/Y H:i:s", strtotime($data->data_fim))'
            ),
            'responsavel',
            array(
                'name'=>'fechado',
                'value'=>'$data->cod_fech[$data->fechado]',
                'htmlOptions'=>array('width'=>'20')
            ),
            //array('class' => 'CButtonColumn'),
        ),
    )); 

?>
