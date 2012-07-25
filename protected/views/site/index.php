<?php
    $app = Yii::app();
    $this->pageTitle=$app->name; 
    $acesso = $app->dateFormatter->formatDateTime($app->user->acesso);

      $this->widget('zii.widgets.grid.CGridView', array(
            'dataProvider'=>$dataProvider,
            'columns'=>array(
                'nome',
                'login',
                'senha',
                //'id_permissao',
                array('class'=>'CButtonColumn'),
            ),
      ));

?>
<h1><i>Ilumirio - Soluções Elétricas em Eventos</i></h1>

<p>Seja Bem-vindo <b><?php echo $app->user->nome; ?></b></p>
<p>Informações de acesso:</p>
<ul>
	<li>Login: <b><?php echo $app->user->login; ?></b></li>
	<li>Ultimo acesso: <b><?php echo $acesso; ?></b></li>
</ul>

<p>Para mais detalhes sobre a apliação por favor envie um e-mail para 
    <a href="mailto:contato@teste.com.br">contato@teste.com.br</a></p>