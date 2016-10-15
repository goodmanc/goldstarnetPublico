<?php

/**
 * This is the model base class for the table "catalogo".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Catalogo".
 *
 * Columns in table "catalogo" available as properties of the model,
 * followed by relations of table "catalogo" available as properties of the model.
 *
 * @property integer $id
 * @property integer $cliente_id
 * @property integer $variedad_id
 * @property string $substitute
 * @property string $status
 * @property integer $used_by
 * @property string $check_in
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 *
 * @property Cliente $cliente
 * @property Variedad $variedad
 * @property Contratoclientedetalle[] $contratoclientedetalles
 */
abstract class BaseCatalogo extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'catalogo';
    }

    public static function representingColumn() {
        return 'substitute';
    }

    public function rules() {
        return array(
            array(	'id, cliente_id, variedad_id, substitute',
					'required',
					'message' => Yii::t('app', 'Field is required')
			),
            array(	'id, cliente_id, variedad_id, used_by, created_by, modified_by',
					'numerical',
					'integerOnly'=>true
			),
            array(	'substitute',
					'length',
					'max'=>30,
					'tooLong' => Yii::t('app', 'Field is required')
			),
            array(	'status',
					'length',
					'max'=>1,
					'tooLong' => Yii::t('app', 'Field is required')
			),
            array(	'check_in, created, modified',
					'safe'
			),
            array('status, used_by, check_in, created_by, created, modified_by, modified',
					'default',
					'setOnEmpty' => true,
					'value' => null
			),
            array('id, cliente_id, variedad_id, substitute, status, used_by, check_in, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'cliente' => array(self::BELONGS_TO, 'Cliente', 'cliente_id'),
            'variedad' => array(self::BELONGS_TO, 'Variedad', 'variedad_id'),
            'contratoclientedetalles' => array(self::HAS_MANY, 'Contratoclientedetalle', 'catalogo_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'cliente_id' => Yii::t('app', 'Cliente'),
                'variedad_id' => Yii::t('app', 'Variedad'),
                'substitute' => Yii::t('app', 'Substitute'),
                'status' => Yii::t('app', 'Status'),
                'used_by' => Yii::t('app', 'Used By'),
                'check_in' => Yii::t('app', 'Check In'),
                'created_by' => Yii::t('app', 'Created By'),
                'created' => Yii::t('app', 'Created'),
                'modified_by' => Yii::t('app', 'Modified By'),
                'modified' => Yii::t('app', 'Modified'),
                'cliente' => null,
                'variedad' => null,
                'contratoclientedetalles' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('cliente_id', $this->cliente_id);
        $criteria->compare('variedad_id', $this->variedad_id);
        $criteria->compare('substitute', $this->substitute, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('used_by', $this->used_by);
        $criteria->compare('check_in', $this->check_in, true);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('modified_by', $this->modified_by);
        $criteria->compare('modified', $this->modified, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}