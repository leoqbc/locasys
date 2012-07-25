<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property integer $id
 * @property string $nome
 * @property string $login
 * @property string $senha
 * @property string $acesso
 * @property string $id_permissao
 *
 * The followings are the available model relations:
 * @property Permissoes $idPermissao
 */
class Users extends CActiveRecord
{   
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, login, senha, id_permissao', 'required'),
			array('nome', 'length', 'max'=>100),
			array('login', 'length', 'max'=>50),
                        array('login', 'unique'),
			array('senha, id_permissao', 'length', 'max'=>11),
			array('acesso', 'safe'),
                        array('id_permissao', 'numerical'),
                        array('login', 'unique', 'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, login, senha, acesso, id_permissao', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idPermissao' => array(self::BELONGS_TO, 'Permissoes', 'id_permissao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'login' => 'Login',
			'senha' => 'Senha',
			'acesso' => 'Acesso',
			'id_permissao' => 'Permissão',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('acesso',$this->acesso,true);
		$criteria->compare('id_permissao',$this->id_permissao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function beforeSave() 
        {
            if ($this->isNewRecord)
                $this->acesso = new CDbExpression('NOW()');
 
            return parent::beforeSave();
        }
        
        /**
         * @param type $user Usuario para não duplicar
         * Verificando se ja não existe o usuário antes de incluir
         * colocar somente no scenario de inclusão
         */
        public function checkUser($attribute, $params)
        {
            if(strlen($this->$attribute) > 5)
            {
                $this->addError('login','O nome de login não pode ser maior que 5');
            }
        }
}