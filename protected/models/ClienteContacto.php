<?php

/**
 * This is the model class for table "clienteContacto".
 *
 * The followings are the available columns in table 'clienteContacto':
 * @property integer $id
 * @property integer $cliente_id
 * @property string $primerNombre
 * @property string $segundoNombre
 * @property string $apellidos
 * @property string $titulo
 * @property string $posision
 * @property string $direccion
 * @property string $tel1
 * @property string $tel2
 * @property string $movil
 * @property string $fax
 * @property string $notas1
 * @property string $notas2
 * @property string $email
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 */
class ClienteContacto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clienteContacto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, cliente_id, primerNombre', 'required'),
			array('id, cliente_id, used_by, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('primerNombre, segundoNombre, apellidos, titulo, posision, direccion, tel1, tel2, movil, fax, email', 'length', 'max'=>50),
			array('notas1, notas2', 'length', 'max'=>100),
			array('status', 'length', 'max'=>1),
			array('check_in, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cliente_id, primerNombre, segundoNombre, apellidos, titulo, posision, direccion, tel1, tel2, movil, fax, notas1, notas2, email, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
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
			'primerNombre' => 'Primer Nombre',
			'segundoNombre' => 'Segundo Nombre',
			'apellidos' => 'Apellidos',
			'titulo' => 'Titulo',
			'posision' => 'Posision',
			'direccion' => 'Direccion',
			'tel1' => 'Tel1',
			'tel2' => 'Tel2',
			'movil' => 'Movil',
			'fax' => 'Fax',
			'notas1' => 'Notas1',
			'notas2' => 'Notas2',
			'email' => 'Email',
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
		$criteria->compare('primerNombre',$this->primerNombre,true);
		$criteria->compare('segundoNombre',$this->segundoNombre,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('posision',$this->posision,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('tel1',$this->tel1,true);
		$criteria->compare('tel2',$this->tel2,true);
		$criteria->compare('movil',$this->movil,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('notas1',$this->notas1,true);
		$criteria->compare('notas2',$this->notas2,true);
		$criteria->compare('email',$this->email,true);
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
	 * @return ClienteContacto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
