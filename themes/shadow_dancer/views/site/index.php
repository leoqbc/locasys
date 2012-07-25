<?php
  $userInfo = Yii::app()->user;
  $data = Yii::app()->dateFormatter;
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  $cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');
  $app = Yii::app();
?>

<?php
/*  $this->pageTitle = Yii::app()->name;
    $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $dataProvider,
        'columns' => array(
            'nome',
            'login',
            //'id_permissao',
            array('class' => 'CButtonColumn'),
        ),
    ));*/
?>

<h1>Seja Bem-vindo <i><?php echo $userInfo->nome ?></i> | Ultimo acesso: <?php echo $data->formatDateTime($userInfo->acesso); ?></h1>
<div class="span-23 showgrid">
<div class="dashboardIcons span-23">
    <div class="dashIcon span-3">
        <a href="<?php echo $app->createUrl('eventos')?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-suitcase3.png" alt="Eventos" /></a>
        <div class="dashIconText "><a href="<?php echo $app->createUrl('eventos')?>">Eventos</a></div>
    </div>
    <?php if($userInfo->permissao == '1'): ?>
        <div class="dashIcon span-3">
            <a href="<?php echo $app->createUrl('users')?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-people.png" alt="Usuários" /></a>
            <div class="dashIconText"><a href="<?php echo $app->createUrl('users')?>">Gerencia de Usuários</a></div>
        </div>
    <?php endif; ?>
    
    <div class="dashIcon span-3">
        <a href="<?php echo $app->createUrl('estoque')?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-barcode.png" alt="Estoque" /></a>
        <div class="dashIconText"><a href="<?php echo $app->createUrl('estoque')?>">Estoque</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-truck.png" alt="Fornecedores" /></a>
        <div class="dashIconText"><a href="#">Fornecedores</a></div>
    </div>
    <?php if($userInfo->permissao == 1): ?>
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-chart.png" alt="Relatórios" /></a>
        <div class="dashIconText"><a href="#">Relatórios</a></div>
    </div>
    <?php endif; ?>
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-gears.png" alt="Opções" /></a>
        <div class="dashIconText"><a href="#">Opções</a></div>
    </div>
    
    <?php if($userInfo->permissao == 1): ?>
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-hard-drive.png" alt="Log de Acessos" /></a>
        <div class="dashIconText"><a href="#">Log de Acessos</a></div>
    </div>
    <?php endif; ?>

</div><!-- END OF .dashIcons -->
<div class="span-10">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Relatório Pizza',
));
?>
<div class="chart2">
<div>
        <div class="text">
            <table class="myChart">
                <thead>
                    <tr>
                        <th></th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                      <th>Sales</th>
                      <td>3923</td>
                      <td>2923</td>
                      <td>2931</td>
                      <td>3942</td>
                      <td>4921</td>
                      <td>6934</td>
                      <td>5934</td>
                    </tr>
                    <tr>
                      <th>Quotes</th>
                      <td>3623</td>
                      <td>2623</td>
                      <td>2831</td>
                      <td>3842</td>
                      <td>4821</td>
                      <td>6534</td>
                      <td>5134</td>
                    </tr>
                    <tr>
                      <th>Visitors </th>
                        <td>3523</td>
                        <td>2223</td>
                        <td>2531</td>
                        <td>3342</td>
                        <td>4521</td>
                        <td>6234</td>
                        <td>5434</td>
                    </tr>
                </tbody>
            </table>
            
            
      </div>
  </div>
</div>
<?php $this->endWidget();?>
</div>
<div class="span-13 last">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Relatório demo 2',
));
?>
<div class="chart3">
    <div>
        <div class="text">
            <table class="myChart">
                <thead>
                    <tr>
                        <th></th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Quotes</th>
                        <td>39523</td>
                        <td>26123</td>
                        <td>29031</td>
                        <td>34342</td>
                        <td>48321</td>
                        <td>42234</td>
                    </tr>
                    <tr>
                        <th>Sales</th>
                        <td>34523</td>
                        <td>22123</td>
                        <td>25031</td>
                        <td>30342</td>
                        <td>45321</td>
                        <td>46234</td>
                    </tr>
                </tbody>
            </table>
            
            
        </div>
    </div>
</div>
<?php $this->endWidget();?>
</div>

</div>