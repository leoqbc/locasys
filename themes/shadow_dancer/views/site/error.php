<?php
$this->pageTitle=Yii::app()->name . ' - Erro';
$this->breadcrumbs=array(
	'Error',
);

Yii::app()->clientScript->registerScript('search', "
    alert('".$message."');
    window.history.back();
");

?>

<h2 class="error_header">Erro: <?php echo $code; ?></h2>

<div class="error error_message">
<?php echo CHtml::encode($message); ?>
</div>