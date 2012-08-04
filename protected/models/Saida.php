<?php

/**
 * This is the model class for table "tbl_saida".
 *
 * The followings are the available columns in table 'tbl_saida':
 * @property string $id
 * @property string $id_item_estoque
 * @property integer $qtd_saida_item
 * @property string $id_evento
 *
 * The followings are the available model relations:
 * @property Eventos $idEvento
 * @property Estoque $idItemEstoque
 */
class Saida extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Saida the static model class
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
		return 'tbl_saida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('qtd_saida_item', 'numerical', 'integerOnly'=>true),
			array('id_item_estoque', 'length', 'max'=>20),
			array('id_evento', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_item_estoque, qtd_saida_item, id_evento', 'safe', 'on'=>'search'),
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
			'idEvento' => array(self::BELONGS_TO, 'Eventos', 'id_evento'),
			'idItemEstoque' => array(self::BELONGS_TO, 'Estoque', 'id_item_estoque'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_item_estoque' => 'Itens de Saída',
			'qtd_saida_item' => 'Quantidade',
			'id_evento' => 'Evento',
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
		$criteria->compare('id_item_estoque',$this->id_item_estoque,true);
		$criteria->compare('qtd_saida_item',$this->qtd_saida_item);
		$criteria->compare('id_evento',$this->id_evento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}