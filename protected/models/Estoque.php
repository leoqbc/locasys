<?php

/**
 * This is the model class for table "tbl_estoque".
 *
 * The followings are the available columns in table 'tbl_estoque':
 * @property string $id
 * @property string $descricao
 * @property integer $id_categoria
 * @property string $codigo
 * @property integer $quantidade
 */
class Estoque extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estoque the static model class
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
		return 'tbl_estoque';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('descricao', 'required'),
			array('id_categoria, quantidade', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>150),
			array('codigo', 'length', 'max'=>50),
                        array('quantidade', 'validaQtd', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, id_categoria, codigo, quantidade', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descricao' => 'Descrição',
			'id_categoria' => 'Categoria',
			'codigo' => 'Codigo',
			'quantidade' => 'Quantidade',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('quantidade',$this->quantidade);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        //Filtro para usar em Rules verifica se o número é negativo
        public function validaQtd()
        {
            if($this->quantidade < 0){
                $this->addError('quantidade','Quantidade não pode ser menor que 0');
            }
        }
        
}