<?php

/**
 * This is the model class for table "condiciones".
 *
 * The followings are the available columns in table 'condiciones':
 * @property integer $id
 * @property integer $oventa_id
 * @property integer $condicion_id
 * @property double $valor
 * @property string $prefix_copy1
 * @property string $sufix
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 *
 * The followings are the available model relations:
 * @property Contratocliente $oventa
 * @property Condicion $condicion
 */
class Condiciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condiciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oventa_id, condicion_id, valor, prefix_copy1, sufix', 'required'),
			array('oventa_id, condicion_id, used_by, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
			array('prefix_copy1, sufix', 'length', 'max'=>20),
			array('status', 'length', 'max'=>1),
			array('check_in, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, oventa_id, condicion_id, valor, prefix_copy1, sufix, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
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
			'oventa' => array(self::BELONGS_TO, 'Contratocliente', 'oventa_id'),
			'condicion' => array(self::BELONGS_TO, 'Condicion', 'condicion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'oventa_id' => 'Oventa',
			'condicion_id' => 'Condicion',
			'valor' => 'Valor',
			'prefix_copy1' => 'Prefix Copy1',
			'sufix' => 'Sufix',
			'status' => 'Status',
			'used_by' => 'Used By',
			'check_in' => 'Check In',
			'created_by' => 'Created By',
			'created' => 'Created',
			'modified_by' => 'Modified By',
			'modified' => 'Modified',
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
		$criteria->compare('oventa_id',$this->oventa_id);
		$criteria->compare('condicion_id',$this->condicion_id);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('prefix_copy1',$this->prefix_copy1,true);
		$criteria->compare('sufix',$this->sufix,true);
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
	 * @return Condiciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
