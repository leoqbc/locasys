<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
));
?>

	<p class="note">Preencher todos os campos com <span class="required">*</span> </p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>

        <?php if(!$model->isNewRecord): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'acesso'); ?>
		<?php echo $form->textField($model,'acesso'); ?>
		<?php echo $form->error($model,'acesso'); ?>
	</div>
        <?php endif; ?>
        
	<div class="row">
		<?php echo $form->labelEx($model,'id_permissao'); ?>
		<?php 
                    echo $form->dropDownList($model, 'id_permissao',
                            CHtml::listData(Permissoes::model()->findAll(), 'id', 'nome')
                         );    
                ?>
		<?php echo $form->error($model,'id_permissao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Gravar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->