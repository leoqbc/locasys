<?php
$this->breadcrumbs=array(
	'Lista de Eventos'=>array('index'),
	$model->nome_evento,
);

$this->menu=array(
	array('label'=>'Lista de Eventos', 'url'=>array('index')),
	array('label'=>'Criar Evento', 'url'=>array('create')),
	array('label'=>'Alterar Evento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Deletar Evento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que deseja deletar este evento?')),
);

Yii::app()->clientScript->registerScript('ajaxdelete', '
    function ajaxDelSaidas(id, evento) {
        $.ajax({
            url: "excluisaida/"+id,
            type: "POST",
            data: { id_evento : evento },
            beforeSend: function () {
                perg = confirm("Deseja mesmo excluir este item?");
                if (!perg) {
                    return false;
                }
            },
            success: function (dados) {
                $.fn.yiiGridView.update("saida-grid", {
                    data: $(this).serialize()
                });
            }
            });
    }
', CClientScript::POS_HEAD);

Yii::app()->clientScript->registerScript('bind', '
    $("#incItem").attr("disabled", "disabled");
    
    $( "#itens" ).bind( "autocompleteselect", function(event, ui) {
        $("#incItem").removeAttr("disabled");
        $("#id_item").attr("value", ui.item.id);
    });

');

?>

<h1>Dados do Evento:</h1>

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
<?php echo CHtml::beginForm(); ?>
    <div class="row">
    <?php
    $modelEst = Estoque::model()->findAll();
    $itens = array();
    foreach($modelEst as $model1)
    {
        $itens[] = array(
            'label'   =>"#$model1->id | $model1->descricao | $model1->codigo | Quantidade: $model1->quantidade",
            'value'   =>$model1->descricao,
            'id'      =>$model1->id,
            'codigo'  =>$model1->codigo
        );
    }
    
    echo CHtml::label("Digite o nome do item para incluir na lista: ", "itens");
    echo "<br />";
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'name'=>'itens',
            'source'=>$itens,
            'htmlOptions'=>array(
                'size'=>'50'
            ),
            'options'=>array(
                'showAnim'=>'fold',
                'minLength'=>'2',
            )
    ));
    echo "&nbsp;";
    echo CHtml::ajaxSubmitButton(
            "+ Adicionar Item",
            array('incluiItens'),
            array(
                'complete'=>'function(){ 
                    $("#itens").attr("value", "");
                    $("#id_item").attr("value", "");
                    $("#incItem").attr("disabled", "disabled");  
                }',
                'success' => 'function(res){
                    $("#erros").append(res);
                    $.fn.yiiGridView.update("saida-grid", {
                        data: $(this).serialize()
                    });
                }',
            ),
            array(
                'class' => 'botao',
                'id'    => 'incItem',
            )
    );
    echo CHtml::hiddenField("id_item");
    echo CHtml::hiddenField("id_evento", $model->id);
    ?>
    </div>
<?php echo CHtml::endForm(); ?>
    <br />
    <?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Lista de Itens de Saída',)); 
    
    if ($model->fechado): ?>
    <div class="flash-notice">
        <b>Atenção:</b> 
        Os produtos já foram retirados do estoque, para editar é preciso retornar os itens.     
    </div>
    <?php endif; ?>
    
    <div id="dados"></div>
    <div id="estoque">
        <?php
            $this->renderPartial('_saidas',array(
                        'id_evento' => $model->id
            ));
        ?>
    </div>
    
    <?php $this->endWidget(); ?>