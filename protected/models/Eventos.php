<?php

/**
 * This is the model class for table "tbl_eventos".
 *
 * The followings are the available columns in table 'tbl_eventos':
 * @property string $id
 * @property string $nome_evento
 * @property string $data_inicio
 * @property string $data_fim
 * @property string $responsavel
 * @property integer $fechado
 */
class Eventos extends CActiveRecord
{
        
        //Criado um array para dados padrão
        //só que isso não vai funcionar nos filtros
        public $cod_fech = array("Não", "Sim");
	
        /**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Eventos the static model class
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
		return 'tbl_eventos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_evento, data_inicio, data_fim, responsavel, fechado', 'required'),
			array('fechado', 'numerical', 'integerOnly'=>true),
			array('nome_evento', 'length', 'max'=>100),
			array('responsavel', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome_evento, data_inicio, data_fim, responsavel, fechado', 'safe', 'on'=>'search'),
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
			'nome_evento' => 'Nome do Evento',
			'data_inicio' => 'Data de Início',
			'data_fim' => 'Data de Finalização',
			'responsavel' => 'Responsável',
			'fechado' => 'Fechado',
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
		$criteria->compare('nome_evento',$this->nome_evento,true);
		$criteria->compare('data_inicio',$this->data_inicio,true);
		$criteria->compare('data_fim',$this->data_fim,true);
		$criteria->compare('responsavel',$this->responsavel,true);
		$criteria->compare('fechado',$this->fechado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function defaultScope()
        {
            return array(
                'order'=>'id DESC',
            );
        }
        
}