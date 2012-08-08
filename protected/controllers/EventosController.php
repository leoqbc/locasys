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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(
                                    'admin',
                                    'delete', 
                                    'itens', 
                                    'incluiitens', 
                                    'saidas',
                                    'atuasaida',
                                    'excluisaida',
                                 ),
				'users'=>array('adm', 'tumadjian'),
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
        
        /** Action para inclusão de itens de saída
         *  Inclui os itens via Ajax!
         */
        public function actionIncluiItens()
        {
            if(isset($_POST['id_item']) && isset($_POST['id_evento']))
            {
                // Falta validar se o item já existe!!!
                // ATENÇÃO!!
                $saida = new Saida;
                $saida->id_item_estoque = $_POST['id_item'];
                $saida->id_evento = $_POST['id_evento'];
                if ($saida->save())
                {
                    // Log de inclusão de saida aqui
                }else
                {
                    throw new CHttpException(404,'Erro ao inserir o item no banco!');
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
            if(Saida::model()->deleteByPk($id))
            {
                //Log de exclusão aqui
            } else {
                throw new CHttpException(404,'Erro ao excluir o item!');
            }
        }
        
        /**
	 * Altera na tabela saída as quantidades
	 * Área para retirada via Ajax
	 */
        public function actionAtuaSaida()
        {
            print_r($_POST);
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
}
