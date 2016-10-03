<?php

/**
 * This is the model class for table "contratoClienteDetalle".
 *
 * The followings are the available columns in table 'contratoClienteDetalle':
 * @property integer $id
 * @property integer $oventa_id
 * @property integer $catalogo_id
 * @property string $subNumCat
 * @property string $nombreVariedad
 * @property string $nombreExportacion
 * @property double $baseRate
 * @property double $hactares
 * @property double $kgs
 * @property string $moneda_id
 * @property double $price
 * @property double $lineTotal
 * @property double $totalFrgn
 * @property string $proyecto_id
 * @property double $stockSeed
 * @property string $proyect
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 */
class ContratoClienteDetalle extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contratoClienteDetalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oventa_id, catalogo_id, moneda_id, proyecto_id', 'required'),
			array('oventa_id, catalogo_id, used_by, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('baseRate, hactares, kgs, price, lineTotal, totalFrgn, stockSeed', 'numerical'),
			array('subNumCat', 'length', 'max'=>30),
			array('nombreVariedad, nombreExportacion', 'length', 'max'=>40),
			array('moneda_id', 'length', 'max'=>4),
			array('proyecto_id, proyect', 'length', 'max'=>20),
			array('status', 'length', 'max'=>1),
			array('check_in, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, oventa_id, catalogo_id, subNumCat, nombreVariedad, nombreExportacion, baseRate, hactares, kgs, moneda_id, price, lineTotal, totalFrgn, proyecto_id, stockSeed, proyect, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
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
			'oventa_id' => 'Oventa',
			'catalogo_id' => 'Catalogo',
			'subNumCat' => 'Sub Num Cat',
			'nombreVariedad' => 'Nombre Variedad',
			'nombreExportacion' => 'Nombre Exportacion',
			'baseRate' => 'Base Rate',
			'hactares' => 'Hactares',
			'kgs' => 'Kgs',
			'moneda_id' => 'Moneda',
			'price' => 'Price',
			'lineTotal' => 'Line Total',
			'totalFrgn' => 'Total Frgn',
			'proyecto_id' => 'Proyecto',
			'stockSeed' => 'Stock Seed',
			'proyect' => 'Proyect',
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
		$criteria->compare('catalogo_id',$this->catalogo_id);
		$criteria->compare('subNumCat',$this->subNumCat,true);
		$criteria->compare('nombreVariedad',$this->nombreVariedad,true);
		$criteria->compare('nombreExportacion',$this->nombreExportacion,true);
		$criteria->compare('baseRate',$this->baseRate);
		$criteria->compare('hactares',$this->hactares);
		$criteria->compare('kgs',$this->kgs);
		$criteria->compare('moneda_id',$this->moneda_id,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('lineTotal',$this->lineTotal);
		$criteria->compare('totalFrgn',$this->totalFrgn);
		$criteria->compare('proyecto_id',$this->proyecto_id,true);
		$criteria->compare('stockSeed',$this->stockSeed);
		$criteria->compare('proyect',$this->proyect,true);
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
	 * @return ContratoClienteDetalle the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
