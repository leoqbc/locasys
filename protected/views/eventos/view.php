<?php
$this->breadcrumbs=array(
	'Lista de Eventos'=>array('index'),
	$model->nome_evento,
);

$this->menu=array(
	array('label'=>'List Eventos', 'url'=>array('index')),
	array('label'=>'Create Eventos', 'url'=>array('create')),
	array('label'=>'Update Eventos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Eventos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Eventos', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('bind', '
    $( "#itens" ).bind( "autocompleteselect", function(event, ui) {
        alert(ui.item.value);
    });
');

?>

<h1>Dados do Evento: <span style="color: #000066; text-decoration: underline"><?php echo $model->nome_evento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome_evento',
		'data_inicio',
		'data_fim',
		'responsavel',
		array(
                'name'=>'fechado',
                'value'=>$model->cod_fech[$model->fechado],
            ),
	),
)); ?>
<br />
<h1>Itens de saída do evento</h1>
<div class="form">
    <div class="row">
    <?php
    
    $models = Estoque::model()->findAll();
    $itens = array();
    foreach($models as $model)
    {
        $itens[] = array(
            'label'   =>"#$model->id | $model->descricao | $model->codigo | Quantidade: $model->quantidade",
            'value'   =>$model->descricao,
            'id'      =>$model->id,
            'codigo'  =>$model->codigo
        );
    }
    
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'name'=>'itens',
            'source'=>$itens,
            'htmlOptions'=>array(
                'size'=>'35px'
            ),
            'options'=>array(
                'showAnim'=>'fold',
                'minLength'=>'2',
            )
    ));
    ?>  
    </div>
</div>
    <?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Itens de saída do evento',)); ?>
    Nenhum item no momento
    <?php $this->endWidget(); ?>