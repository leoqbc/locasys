<?php

echo CHtml::beginForm();
$itSaida = Saida::model();
$itSaida->id_evento=$id_evento;
$dataProvider = $itSaida->search();

$dataProvider->setPagination(
    array(
        'pageSize'=>100
    )
);

echo CHtml::errorSummary($itSaida);

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'saida-grid',
//    'selectableRows' => 999,
    'dataProvider' => $dataProvider,
    'columns' => array(
        'id',
        array(
            'name' => 'idItemEstoque.descricao',
            'header' => 'Item',
            'htmlOptions' => array('width' => '300')
        ),
        array(
            'type' => 'raw',
            'name' => 'qtd_saida_item',
            'value' => 'CHtml::textField("Saida[$data->id]", $data->qtd_saida_item,array("size"=>"5"))',
            //'htmlOptions' => array('width' => '50')
        ),
        array(
            'name' => 'idItemEstoque.quantidade',
            'header' => 'Qtd em Estoque',
        ),
        array(
            'type' => 'raw',
            'value' => 'CHtml::link(
                "Excluir", 
                "javascript:void(0)",//"excluisaida/$data->id",
                array("onclick" => "javascript:ajaxDelSaidas($data->id, $data->id_evento)")
            );',
            'htmlOptions' => array('width' => '40')
        ),
    )
));

// ================================================
// Implementar esse Ajax para salvar as quantidades
// ================================================
echo CHtml::ajaxSubmitButton(
        'Salvar Quantidades', 
        array('atuasaida'),
        array(
            'update' => '#teste',
        ),
        array(
            'class' => 'botao',
            'id'    => 'svQtd',
        )
    );
echo "&nbsp;";
// ================================================
// Implementar esse Ajax para retirar do estoque
// ================================================
echo CHtml::ajaxSubmitButton(
        'Baixar do Estoque', 
        array('incluiItens'),
        "",
        array(
            'class' => 'botao',
            'id'    => 'bxStoque',
        )
    );
echo CHtml::hiddenField('id_evento', $id_evento);
echo CHtml::endForm();
?>
<div id="teste"></div>
