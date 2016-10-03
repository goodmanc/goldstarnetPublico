<?php

/**
 * This is the model class for table "contratoCliente".
 *
 * The followings are the available columns in table 'contratoCliente':
 * @property integer $id
 * @property integer $temporada_id
 * @property integer $cliente_id
 * @property string $proyecto_id
 * @property string $fecha
 * @property string $observaciones
 * @property string $guarantee
 * @property string $conditionsHeader
 * @property string $conditionsFooter
 * @property string $growerServices
 * @property string $stockSeed
 * @property string $productionReports
 * @property string $shipments
 * @property string $aditionalPhitosanitaryReq
 * @property string $preShipmentsSeedSamples
 * @property string $earlyTerminationBuyOut
 * @property string $overProduction
 * @property string $prices
 * @property string $advancePayments
 * @property string $paymentTerms
 * @property string $confidentiality
 * @property string $lotNumberAssignment
 * @property string $arbitrationAndLaw
 * @property string $buyerSigName
 * @property string $growerSigName
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 */
class ContratoCliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contratoCliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('temporada_id, cliente_id, proyecto_id', 'required'),
			array('temporada_id, cliente_id, used_by, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('proyecto_id', 'length', 'max'=>20),
			array('buyerSigName, growerSigName', 'length', 'max'=>50),
			array('status', 'length', 'max'=>1),
			array('fecha, observaciones, guarantee, conditionsHeader, conditionsFooter, growerServices, stockSeed, productionReports, shipments, aditionalPhitosanitaryReq, preShipmentsSeedSamples, earlyTerminationBuyOut, overProduction, prices, advancePayments, paymentTerms, confidentiality, lotNumberAssignment, arbitrationAndLaw, check_in, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, temporada_id, cliente_id, proyecto_id, fecha, observaciones, guarantee, conditionsHeader, conditionsFooter, growerServices, stockSeed, productionReports, shipments, aditionalPhitosanitaryReq, preShipmentsSeedSamples, earlyTerminationBuyOut, overProduction, prices, advancePayments, paymentTerms, confidentiality, lotNumberAssignment, arbitrationAndLaw, buyerSigName, growerSigName, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
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
			'temporada_id' => 'Temporada',
			'cliente_id' => 'Cliente',
			'proyecto_id' => 'Proyecto',
			'fecha' => 'Fecha',
			'observaciones' => 'Observaciones',
			'guarantee' => 'Guarantee',
			'conditionsHeader' => 'Conditions Header',
			'conditionsFooter' => 'Conditions Footer',
			'growerServices' => 'Grower Services',
			'stockSeed' => 'Stock Seed',
			'productionReports' => 'Production Reports',
			'shipments' => 'Shipments',
			'aditionalPhitosanitaryReq' => 'Aditional Phitosanitary Req',
			'preShipmentsSeedSamples' => 'Pre Shipments Seed Samples',
			'earlyTerminationBuyOut' => 'Early Termination Buy Out',
			'overProduction' => 'Over Production',
			'prices' => 'Prices',
			'advancePayments' => 'Advance Payments',
			'paymentTerms' => 'Payment Terms',
			'confidentiality' => 'Confidentiality',
			'lotNumberAssignment' => 'Lot Number Assignment',
			'arbitrationAndLaw' => 'Arbitration And Law',
			'buyerSigName' => 'Buyer Sig Name',
			'growerSigName' => 'Grower Sig Name',
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
		$criteria->compare('temporada_id',$this->temporada_id);
		$criteria->compare('cliente_id',$this->cliente_id);
		$criteria->compare('proyecto_id',$this->proyecto_id,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('guarantee',$this->guarantee,true);
		$criteria->compare('conditionsHeader',$this->conditionsHeader,true);
		$criteria->compare('conditionsFooter',$this->conditionsFooter,true);
		$criteria->compare('growerServices',$this->growerServices,true);
		$criteria->compare('stockSeed',$this->stockSeed,true);
		$criteria->compare('productionReports',$this->productionReports,true);
		$criteria->compare('shipments',$this->shipments,true);
		$criteria->compare('aditionalPhitosanitaryReq',$this->aditionalPhitosanitaryReq,true);
		$criteria->compare('preShipmentsSeedSamples',$this->preShipmentsSeedSamples,true);
		$criteria->compare('earlyTerminationBuyOut',$this->earlyTerminationBuyOut,true);
		$criteria->compare('overProduction',$this->overProduction,true);
		$criteria->compare('prices',$this->prices,true);
		$criteria->compare('advancePayments',$this->advancePayments,true);
		$criteria->compare('paymentTerms',$this->paymentTerms,true);
		$criteria->compare('confidentiality',$this->confidentiality,true);
		$criteria->compare('lotNumberAssignment',$this->lotNumberAssignment,true);
		$criteria->compare('arbitrationAndLaw',$this->arbitrationAndLaw,true);
		$criteria->compare('buyerSigName',$this->buyerSigName,true);
		$criteria->compare('growerSigName',$this->growerSigName,true);
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
	 * @return ContratoCliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
