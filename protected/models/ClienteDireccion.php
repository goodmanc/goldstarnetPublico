<?php

/**
 * This is the model class for table "clienteDireccion".
 *
 * The followings are the available columns in table 'clienteDireccion':
 * @property integer $id
 * @property integer $cliente_id
 * @property string $code
 * @property string $calle
 * @property string $poblacion
 * @property string $ciudad
 * @property string $pobox
 * @property string $comuna
 * @property string $pais_id
 * @property string $ref1
 * @property string $ref2
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 */
class ClienteDireccion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clienteDireccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cliente_id, code, pais_id', 'required'),
			array('cliente_id, used_by, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>50),
			array('calle, poblacion, ciudad, comuna, ref1, ref2', 'length', 'max'=>100),
			array('pobox', 'length', 'max'=>20),
			array('pais_id', 'length', 'max'=>2),
			array('status', 'length', 'max'=>1),
			array('check_in, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cliente_id, code, calle, poblacion, ciudad, pobox, comuna, pais_id, ref1, ref2, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
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
			'cliente_id' => 'Cliente',
			'code' => 'Code',
			'calle' => 'Calle',
			'poblacion' => 'Poblacion',
			'ciudad' => 'Ciudad',
			'pobox' => 'Pobox',
			'comuna' => 'Comuna',
			'pais_id' => 'Pais',
			'ref1' => 'Ref1',
			'ref2' => 'Ref2',
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
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('poblacion',$this->poblacion,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('pobox',$this->pobox,true);
		$criteria->compare('comuna',$this->comuna,true);
		$criteria->compare('pais_id',$this->pais_id,true);
		$criteria->compare('ref1',$this->ref1,true);
		$criteria->compare('ref2',$this->ref2,true);
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
	 * @return ClienteDireccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}