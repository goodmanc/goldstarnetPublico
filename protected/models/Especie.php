<?php

/**
 * This is the model class for table "especie".
 *
 * The followings are the available columns in table 'especie':
 * @property integer $id
 * @property integer $familia_id
 * @property string $nombre
 * @property string $name
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 *
 * The followings are the available model relations:
 * @property Familia $familia
 * @property Variedad[] $variedads
 */
class Especie extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'especie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('familia_id, nombre, name', 'required'),
			array('familia_id, used_by, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('nombre, name', 'length', 'max'=>50),
			array('status', 'length', 'max'=>1),
			array('check_in, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, familia_id, nombre, name, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
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
			'familia' => array(self::BELONGS_TO, 'Familia', 'familia_id'),
			'variedads' => array(self::HAS_MANY, 'Variedad', 'especie_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'familia_id' => 'Familia',
			'nombre' => 'Nombre',
			'name' => 'Name',
			'status' => 'Estado',
			'used_by' => 'Usado por',
			'check_in' => 'Check IN',
			'created_by' => 'Creado por',
			'created' => 'Creado el',
			'modified_by' => 'Modificado por',
			'modified' => 'Modificado el',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('familia_id',$this->familia_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('used_by',$this->used_by);
		$criteria->compare('check_in',$this->check_in,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified_by',$this->modified_by);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Especie the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
