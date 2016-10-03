<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $id
 * @property string $rut
 * @property string $nombre
 * @property string $abrev
 * @property integer $propiedad1
 * @property integer $propiedad2
 * @property integer $propiedad3
 * @property integer $propiedad4
 * @property integer $propiedad5
 * @property integer $propiedad6
 * @property integer $propiedad7
 * @property integer $propiedad8
 * @property integer $propiedad9
 * @property integer $propiedad10
 * @property integer $propiedad11
 * @property integer $propiedad12
 * @property integer $propiedad13
 * @property integer $propiedad14
 * @property integer $propiedad15
 * @property integer $propiedad16
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 *
 * The followings are the available model relations:
 * @property Catalogo[] $catalogos
 * @property Clientecontacto[] $clientecontactos
 * @property Clientedireccion[] $clientedireccions
 * @property Contratocliente[] $contratoclientes
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut, nombre, abrev', 'required'),
			array('propiedad1, propiedad2, propiedad3, propiedad4, propiedad5, propiedad6, propiedad7, propiedad8, propiedad9, propiedad10, propiedad11, propiedad12, propiedad13, propiedad14, propiedad15, propiedad16, used_by, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>10),
			array('nombre', 'length', 'max'=>100),
			array('abrev', 'length', 'max'=>20),
			array('status', 'length', 'max'=>1),
			array('check_in, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, rut, nombre, abrev, propiedad1, propiedad2, propiedad3, propiedad4, propiedad5, propiedad6, propiedad7, propiedad8, propiedad9, propiedad10, propiedad11, propiedad12, propiedad13, propiedad14, propiedad15, propiedad16, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
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
			'catalogos' => array(self::HAS_MANY, 'Catalogo', 'cliente_id'),
			'clientecontactos' => array(self::HAS_MANY, 'Clientecontacto', 'cliente_id'),
			'clientedireccions' => array(self::HAS_MANY, 'Clientedireccion', 'cliente_id'),
			'contratoclientes' => array(self::HAS_MANY, 'Contratocliente', 'cliente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rut' => 'RUT',
			'nombre' => 'Nombre',
			'abrev' => 'Abreviatura',
			'propiedad1' => 'Propiedad 1',
			'propiedad2' => 'Propiedad 2',
			'propiedad3' => 'Propiedad 3',
			'propiedad4' => 'Propiedad 4',
			'propiedad5' => 'Propiedad 5',
			'propiedad6' => 'Propiedad 6',
			'propiedad7' => 'Propiedad 7',
			'propiedad8' => 'Propiedad 8',
			'propiedad9' => 'Propiedad 9',
			'propiedad10' => 'Propiedad 10',
			'propiedad11' => 'Propiedad 11',
			'propiedad12' => 'Propiedad 12',
			'propiedad13' => 'Propiedad 13',
			'propiedad14' => 'Propiedad 14',
			'propiedad15' => 'Propiedad 15',
			'propiedad16' => 'Propiedad 16',
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
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('abrev',$this->abrev,true);
		$criteria->compare('propiedad1',$this->propiedad1);
		$criteria->compare('propiedad2',$this->propiedad2);
		$criteria->compare('propiedad3',$this->propiedad3);
		$criteria->compare('propiedad4',$this->propiedad4);
		$criteria->compare('propiedad5',$this->propiedad5);
		$criteria->compare('propiedad6',$this->propiedad6);
		$criteria->compare('propiedad7',$this->propiedad7);
		$criteria->compare('propiedad8',$this->propiedad8);
		$criteria->compare('propiedad9',$this->propiedad9);
		$criteria->compare('propiedad10',$this->propiedad10);
		$criteria->compare('propiedad11',$this->propiedad11);
		$criteria->compare('propiedad12',$this->propiedad12);
		$criteria->compare('propiedad13',$this->propiedad13);
		$criteria->compare('propiedad14',$this->propiedad14);
		$criteria->compare('propiedad15',$this->propiedad15);
		$criteria->compare('propiedad16',$this->propiedad16);
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
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
