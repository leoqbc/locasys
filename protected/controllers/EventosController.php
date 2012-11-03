<?php

class EventosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

        public $id_evento;
        
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(
                                    'admin',
                                    'delete',
                                    'create',
                                    'update',   
                                    'itens', 
                                    'incluiitens', 
                                    'saidas',
                                    'atuasaida',
                                    'excluisaida',
                                    'atuaestoque'
                                 ),
				'users'=>array('adm', 'tumadjian'),
			),
                        array('deny', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(
                                    'create',   
                                    'update', 
                                    'delete', 
                                    'atuasaida', 
                                    'excluisaida'
                                ),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
                                'actions'=>array('index'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
                $this->id_evento = $id;
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Eventos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Eventos']))
		{
			$model->attributes=$_POST['Eventos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Eventos']))
		{
			$model->attributes=$_POST['Eventos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Eventos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Eventos']))
			$model->attributes=$_GET['Eventos'];
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Eventos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Eventos']))
			$model->attributes=$_GET['Eventos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Eventos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
        // Falta implementar a busca do REQUEST ($_GET['term'])
        // Colocar filtro no Model!!!
        public function actionItens()
        {
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
            
            echo CJSON::encode($itens);
            Yii::app()->end();
        }
        
        /** 
         * Verifica se o evento foi fechado
         */
        private function eventoFechado($id_evento)
        {
            $evento = Eventos::model()->findByPk($id_evento);
            
            // Não deixar excluir itens de evento fechado
            // não coloquei no model, pois não é regra pra todos
            if($evento->fechado)
            {
                echo '
                        <script type="text/javascript">
                            alert("Evento já foi fechado, não é possivel alterar");
                        </script>';
                Yii::app()->end();
            }
        }
        
        /** Action para inclusão de itens de saída
         *  Inclui os itens via Ajax!
         */
        public function actionIncluiItens()
        {
            // Se tiver fechado para AQUI!
            $this->eventoFechado($_POST["id_evento"]);
            
            if(isset($_POST['id_item']) && isset($_POST['id_evento']))
            {
                $saida = new Saida;
                $saida->id_item_estoque = $_POST['id_item'];
                $saida->id_evento = $_POST['id_evento'];
                if ($saida->save())
                {
                    // Log de inclusão de saida aqui
                    $evento = Eventos::model()->findByPk($_POST["id_evento"]);
                    $evento->pronto_saida=0;
                    $evento->save();
                }else
                {
                    $errs = count($saida->getError());
                    if($errs) {
                        echo '
                        <script type="text/javascript">
                            alert("Ocorreu um erro na inclusão");
                        </script>';
                    }
                }
            }
            //echo CHtml::encode(print_r($_POST, true));
            Yii::app()->end();
        }
        
        /**
	 * Exclui item da tabela saída
	 * Área para exclusão via Ajax
	 */
        public function actionExcluiSaida($id)
        {
            // Se tiver fechado para AQUI!
            $this->eventoFechado($_POST["id_evento"]);
            
            if(Saida::model()->deleteByPk($id))
            {
                //Log de exclusão aqui
            } else {
                throw new CHttpException(404,'Erro ao excluir o item!');
            }
            Yii::app()->end();
        }
        
        /**
	 * Altera na tabela saída as quantidades
	 * Área para retirada via Ajax
	 */
        public function actionAtuaSaida()
        {
            // Se tiver fechado para AQUI!
            $this->eventoFechado($_POST["id_evento"]);
            
            if (isset($_POST["Saida"])) {
                $err = false;
                foreach ($_POST["Saida"] as $id => $val) {
                     if(!$this->alteraQtdSaida ($id, $val)) {
                         $err = true;
                     }
                }
                
                if($err) {
                     // Caso der erro significa que a saida ainda está pronta
                     // para baixar o estoque
                     $evento = Eventos::model()->findByPk($_POST["id_evento"]);
                     $evento->pronto_saida=0;
                     $evento->save();
                     echo '
                        <script type="text/javascript">
                            alert("Nem todos os dados foram gravados com sucesso, verifique os erros");
                        </script>';
                } else {
                     // Mudando campos pronto_saida
                     // e avisando que a saida esta pronta para 
                     // retirar do estoque
                     $evento = Eventos::model()->findByPk($_POST["id_evento"]);
                     $evento->pronto_saida=1;
                     $evento->save();
                     echo '
                        <script type="text/javascript">
                            alert("Dados foram gravados com sucessos! \n\nVocê já pode baixar os itens do estoque!");
                        </script>';
                }
                
            }
        }
        
        /**
	 * Action de saída
	 * Criado pra mostrar saídas em uma página única
	 */
        public function actionSaidas($id)
        {
            $id_evento = $id;
            $this->render("_saidas", 
                    array(
                        "id_evento" => $id_evento
                    )
                );
        }
        
	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='eventos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        // Function para alterar o valor de uma ROW do Model Saida
        // Ela está sendo usada no Método actionAtuaSaida()
        protected function alteraQtdSaida ($id, $qtd) 
        {
            $model = Saida::model()->findByPk($id);
            $model->qtd_saida_item = $qtd;
            if (!$model->save())
            {
                $erros = $model->getErrors('qtd_saida_item');
                foreach ($erros as $erro) {
                    echo '<br /><span style="color: red">' . $model->idItemEstoque->descricao . " - Erro:  $erro</span>"; 
                }
                return false;
            } else {
                return true;
            }
        }
        
        public function actionAtuaEstoque()
        {
            $evento = Eventos::model()->findByPk($_POST["id_evento"]);
            // Para a função caso já foi retirado do estoque
            if ($evento->fechado == true) {
                echo '<br />
                        <span style="color: red">
                            Esse evento já baixou do estoque, retorne os itens
                            ao estoque para voltar a edita-lo.
                        <span>';
                return;
            }
                
            
            if (!$evento->pronto_saida) {
                 echo '<br />
                        <span style="color: red">
                            Seus itens não estão prontos para baixar no estoque<br \>
                            Verifique as quantidades!
                        <span>';
            } else {
                foreach($_POST["Saida"] as $idsaida => $qtd){
                    try {
                        $this->baixaEstoque($idsaida, $qtd);
                    } catch (CHttpException $e) {
                        echo "<script>alert('{$e->getMessage()}');</script>";
                    }
                }
                $evento->fechado = 1;
                $evento->save();
                echo '<script>
                        alert("Itens retirados do estoque!");
                        $.fn.yiiGridView.update("saida-grid", {
                            data: $(this).serialize()
                        });
                    </script>';
            }
        }
        
        protected function baixaEstoque($idsaida, $qtd)
        {
            $saida = Saida::model()->findByPk($idsaida);
            $estoque = Estoque::model()->findByPk($saida->id_item_estoque);
            $estoque->quantidade -= $qtd;
            if (!$estoque->save()) {
                throw new CHttpException(500, "Um erro aconteceu ao alterar o item ( $estoque->descricao ) do estoque, contate seu desenvolvedor");
            }
        }
        
}
